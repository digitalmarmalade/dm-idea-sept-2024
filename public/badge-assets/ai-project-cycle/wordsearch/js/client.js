(function () {

    'use strict';

    app.config.howOftenToShowLengthVideo = 3;

    /*  -------
        HELPERS
        -------  */

    app.helpers.userHasSeenWordLengthAnimation = false;

    app.helpers.getPuzzleLives = function () {

        var lives = -1;

        if (app.vue.data.source.meta.difficulty === 'medium') {
            lives = 4;
        }
        if (app.vue.data.source.meta.difficulty === 'hard') {
            lives = 1;
        }

        return lives;
    };

    app.helpers.lifeAnimation = function () {
        var currentLife = document.querySelectorAll('.lives li')[app.vue.data.user.lives];
        var params = {
            container: currentLife.querySelector('.life-animate'),
            renderer: 'svg',
            loop: false,
            name: 'lottie',
            path: 'lottie/lives.json'
        };

        var anim = lottie.loadAnimation(params);

        anim.addEventListener('complete', animationCompleted);

        function animationCompleted() {
            currentLife.classList.add('hide-life');
        }
    };

    app.helpers.livesLostAll = function () {
        app.timer.stop();
        app.vue.data.modals.visible.push('fail');

        var fireVideo = document.getElementById('video-fire');
        var failBackground = document.querySelector('.fail-bg');

        failBackground.classList.remove('fail-fade-out');

        fireVideo.play();
        fireVideo.addEventListener('ended', fireVideoEnded, false);

        function fireVideoEnded(e) {
            failBackground.classList.add('fail-fade-out');
        }

    };

    app.helpers.livesLostFirst = function () {
        app.vue.data.modals.visible.push('life-lost');

        var lifeLostInModal = document.getElementById('lightningBolt');

        lifeLostInModal.innerHTML = "";

        var lightningBolt = bodymovin.loadAnimation({
            container: lifeLostInModal,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'lottie/lightning-bolt-large.json'
        });
    };

    app.helpers.videoGetLengthVideosForWord = function (word) {

        var videos = app.vue.model.puzzle.videos,
            videosToChooseFrom = [];

        for (var len in videos.words.longerthan) {
            if (word.length > len) {
                videosToChooseFrom = videosToChooseFrom.concat(videos.words.longerthan[len]);
            }
        }

        for (var len in videos.words.shorterthan) {
            if (word.length < len) {
                videosToChooseFrom = videosToChooseFrom.concat(videos.words.shorterthan[len]);
            }
        }

        return videosToChooseFrom;

    };

    app.helpers.videoGetTriggerVideosForWord = function (word) {

        var videos = app.vue.model.puzzle.videos,
            videosToChooseFrom = [];

        for (var cat in videos.triggers) {
            for (var triggerWord in videos.triggers[cat]) {
                if (triggerWord.toLowerCase() === word.toLowerCase()) {
                    videosToChooseFrom = videosToChooseFrom.concat(videos.triggers[cat][triggerWord]);
                }
            }
        }

        return videosToChooseFrom;

    };

    app.helpers.videoHide = function () {
        app.vue.data.show.video = null;
    };

    app.helpers.videoShow = function (name) {
        app.vue.data.show.video = name;
        setTimeout(
            function () {
                document.getElementById('video-general').play();
                document.getElementById('video-general').addEventListener('ended', function (e) {
                    app.helpers.videoHide();
                });
            }, 0
        );
    };

    app.helpers.videoShowFromWord = function (word, isValidWord) {

        var videosToChooseFrom = [];

        videosToChooseFrom = videosToChooseFrom.concat(app.helpers.videoGetTriggerVideosForWord(word));

        if (videosToChooseFrom.length < 1 && isValidWord) {
            if (app.helpers.userHasSeenWordLengthAnimation === false) {
                var rnd = Math.ceil(Math.random() * app.config.howOftenToShowLengthVideo);
                if (rnd === app.config.howOftenToShowLengthVideo) {
                    videosToChooseFrom = videosToChooseFrom.concat(app.helpers.videoGetLengthVideosForWord(word));
                    app.helpers.userHasSeenWordLengthAnimation = true;
                }
            }
        }

        if (videosToChooseFrom.length < 1) {
            return false;
        }

        var video = videosToChooseFrom[Math.floor(Math.random(videosToChooseFrom.length))];

        app.helpers.videoShow(video);
    };

    app.helpers.wordFound = function (obj) {

        if (!app.vue.model.isCompleted) {
            app.helpers.videoShowFromWord(obj.word, true);
        }

    };

    app.helpers.wordNotFound = function (obj) {

        if (!app.vue.data.config.hasLives) {
            app.helpers.videoShowFromWord(obj.word);
            return false;
        }

        app.vue.data.user.lives--;

        app.helpers.lifeAnimation();

        var allLivesLost = app.vue.data.user.lives <= 0;
        var firstLifeLost = app.vue.data.user.lives === (app.vue.model.puzzle.lives - 1);

        if (firstLifeLost && !allLivesLost) {
            app.helpers.livesLostFirst();
        }

        if (allLivesLost) {
            app.helpers.livesLostAll();
        }

        if (!allLivesLost && !firstLifeLost) {
            app.helpers.videoShowFromWord(obj.word, false);
        }

    };



    /*  --------------
        CORE OVERRIDES
        --------------  */

    app.helpers.resetUserState = function () {
        app.helpers.removeBlocks();
        app.vue.data.user = app.helpers.getDefaultUserState();
        app.vue.data.user.lives = app.vue.model.puzzle.lives
        app.helpers.saveUserState();
    };

    app.vue.methods.getTitlePuzzleObject = function (puzzle) {

        puzzle.lives = app.vue.data.user.lives = app.helpers.getPuzzleLives();

        app.vue.data.config.hasLives = puzzle.lives !== -1;

        app.vue.data.config.hasFullWords = app.vue.data.source.meta.difficulty !== 'hard';

        //app.vue.data.links.email = app.helpers.getEmailLink();

        puzzle.unusedLetters = [];
        if (app.vue.data.source.settings.unused) {
            var solution = app.vue.data.source.celldata;
            var unusedCellIds = app.vue.data.source.settings.unused.split(',');
            for (var i = 0; i < unusedCellIds.length; i++) {
                puzzle.unusedLetters.push(solution[unusedCellIds[i] - 1]);
            }
        }

        puzzle.videos = app.vue.data.source.videos;

        return puzzle;
    };

    app.vue.methods.videoHide = function () {
        app.helpers.videoHide();
    };



    /*  --------------
        CORE OVERRIDES
        --------------  */

    app.vue.computed.tooltips = function () {

        var tooltips = [];

        if (app.vue.data.config.hasLives) {
            var lives = app.helpers.getPuzzleLives();
            var lifeWords = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
            var lifeText = lives === 1 ? 'one chance' : lifeWords[lives - 1] + ' chances';
            tooltips.push({
                name: 'lives',
                text: 'You have ' + lifeText + ' and then you&rsquo;re out.'
            });
        }

        if (app.vue.data.user.settings.timer) {
            tooltips.push({
                name: 'time',
                text: 'Tick tock. <br>Here&rsquo;s your time check.'
            });
        }

        tooltips.push({
            name: 'resize-text',
            text: 'You can resize your text here.'
        });

        tooltips.push({
            name: 'settings',
            text: 'Check your settings here.'
        });

        return tooltips;

    };

    /*  ---------------
        EVENT LISTENERS
        ---------------  */

    document.addEventListener('wordsearch-word-found', function (e) {
        app.helpers.wordFound(e.detail);
    });

    document.addEventListener('wordsearch-word-not-found', function (e) {
        app.helpers.wordNotFound(e.detail);
    });

}());
