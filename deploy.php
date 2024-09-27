<?php

namespace Deployer;

require 'recipe/laravel.php';

set('user', 'deployer');
set('docker_user', '1001:1');
set('bin/php', 'docker-compose -f ~/docker/aws-qa/docker-compose.yml exec -T --user 1001:1 php71 php');
set('bin/composer', '{{bin/php}} -d memory_limit=-1 {{release_path}}/composer.phar --working-dir={{release_path}} install');
set('composer_dev', '--no-dev');
set('composer_options', '--no-scripts --verbose --prefer-dist --no-progress --no-interaction {{composer_dev}} --optimize-autoloader');

set('repository', 'git@github.com:digitalmarmalade/idea.git');
// set('git_tty', true); // [Optional] Allocate tty for git on first deployment
// only add stuff in addition to what's inthe laravel recipe
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
set('allow_anonymous_stats', false);


host('dmqa')
    ->user('deployer')
    ->port(22)
    ->configFile('~/.ssh/config')
    ->forwardAgent(true)
    ->multiplexing(false)
    ->stage('demo')
    ->set('branch', 'dm')
    ->set('deploy_path', '/var/www/vhosts/idea.dmdemo.co.uk')
    ->set('docker_file', '~/docker/aws-qa/docker-compose.yml');

// Tasks
desc('Restart PHP-FPM service');
task('docker:php-fpm:restart', function () {
    // The user must have rights for docker-compose restart service
    // /etc/sudoers: username ALL=NOPASSWD:/usr/bin/docker-compose
    //*********************************************************//
    //** Uncomment the appropriate version for this site     **//
    //*********************************************************//
    // run('docker-compose -f {{docker_file}} restart php55');
    // run('docker-compose -f {{docker_file}} restart php56');
    run('docker-compose -f {{docker_file}} restart php71');
    //run('docker-compose -f {{docker_file}} restart php71');
    //run('docker-compose -f {{docker_file}} restart php72');
});

desc('Restart apache service');
task('docker:apache:restart', function () {
    // The user must have rights for docker-compose restart service
    // /etc/sudoers: username ALL=NOPASSWD:/usr/bin/docker-compose
    run('docker-compose -f {{docker_file}} restart apache');
});

desc('Set Laravel storage folder permissions to allow docker containers to write files');
task('docker:storage:chown', function () {
    // The user must have rights for docker-compose restart service
    // /etc/sudoers: username ALL=NOPASSWD:/usr/bin/chown
    run('sudo chown -R deployer:daemon {{deploy_path}}/shared/storage');
});

desc('Set Laravel storage folder ownership to allow docker containers to write files & deployer to read docker created files');
task('docker:storage:chmod', function () {
    // The group must have write rights to storage
    // /etc/sudoers: username ALL=NOPASSWD:/usr/bin/chmod
    run('sudo chmod -R ug+w {{deploy_path}}/shared/storage');
});


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Change ownership and access rights for storage folder before deploy
// allows docker created files to be read / written by deployer and vice versa
before('deploy:symlink', 'docker:storage:chown');
before('deploy:symlink', 'docker:storage:chmod');
// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');

// Change Laravel storage folder access rights
after('deploy:symlink', 'docker:storage:chown');

// Change ownership and access rights for storage folder after deploy
// allows docker created files to be read / written by deployer and vice versa
after('deploy:symlink', 'docker:storage:chown');
after('deploy:symlink', 'docker:storage:chmod');
// Restart PHP
after('deploy', 'docker:php-fpm:restart');

// after build start queue
after('deploy', 'artisan:queue:restart');

// restart apache
after('deploy', 'docker:apache:restart');

?>
