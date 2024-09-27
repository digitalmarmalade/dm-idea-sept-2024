<?php

$folder = './../../storage/logs';

$removeFromPaths = [
    '/home/site/wwwroot',
    '/vendor/laravel/framework'
];


/* NO EDIT BELOW */

$authorized = false;

if (array_key_exists('REMOTE_ADDR', $_SERVER) && ($_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '31.221.29.221')) {
    $authorized = true;
}

if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER) && ($_SERVER['HTTP_CF_CONNECTING_IP'] === '127.0.0.1' || $_SERVER['HTTP_CF_CONNECTING_IP'] === '31.221.29.221')) {
    $authorized = true;
}

if ($authorized === false) {
    die();
};

$removeFromPaths = addOtherPaths($removeFromPaths);

if (!isset($_GET['file'])) {
    $files = readFolderContents($folder);
    if (count($files) === 0) {
        die('<p>No log files found</p>');
    }
    $files = array_reverse($files);
    foreach ($files as $file) {
        echo '<p><a href="?file=' . $file['name'] . '">' . $file['name'] . '</a></p>';
    }
    die();
}
$file = $_GET['file'];
echo '<p><b>' . $file . '</b></p>';

$lines = file($folder .'/' . $file);
$items = [];
$k=0;
foreach ($lines as $line) {
    $item = trim($line);
    preg_match("/^\[([- 0-9:]*)\]/", $item, $date);
    if (!empty($date)) {
        if (isset($newItem)) {
            $items[] = $newItem;
            $newItem = [];
            $k++;
        }
        $newItem['date'] = $date[1];
        $details = getDetails(trim(str_replace($date[0], '', $item)));
        $newItem['details'] = $details;
    } else {
        if (substr($item, 0, 1) === '#') {
            $newItem['stack'] = isset($newItem['stack']) ? $newItem['stack'] : [];
            $newItem['stack'][] = tidyStackItem($item);
        }
    }
}
$items[] = $newItem;

$items = array_reverse($items);

$k = 0;
foreach ($items as $item) {
    echo '<p style="margin-bottom:0"><b>' . $k . ': </b>' . $item['date']. '</p>';
    echo '<pre style="margin:0;white-space:normal;">' . $item['details']['desc'] . '</pre>';
    $k++;
}


function getDetails($item) {

        $returnObj = [
            'info' => $item
        ];

        $bits = explode(':', $item);
        $type = trim(array_shift($bits));
        $desc = trim(implode(':', $bits));
        $desc = str_replace($GLOBALS['removeFromPaths'], '', $desc);
        $desc = str_replace('\\\\', '/', $desc);

        $returnObj['type'] = $type;
        $returnObj['desc'] = $desc;

        return $returnObj;

}

function tidyStackItem($item) {

    $item = str_replace($GLOBALS['removeFromPaths'], '', $item);

    return $item;

}

function readFolderContents($folder = './', $extensions = ['log']) {

    if ($handle = opendir($folder)) {

        $contents = array();
        while (false !== ($item = readdir($handle))) {
            if ($item != '.' AND $item != '..' AND $item != 'laravel.log') {
                $filepath = $folder.DIRECTORY_SEPARATOR.$item;
                $info = pathinfo($filepath);
                $data['type'] = is_dir($filepath) ? 'directory' : 'file';
                $data['name'] = $item;
                $data['path'] = substr($folder, 0, 2) == './' ? substr($folder, 2) . '/' . $data['name'] : $folder.'/'.$data['name'];
                if ($data['type'] === 'file' && in_array($info['extension'], $extensions)) {
                    $data['extension'] = $info['extension'];
                    $data['filename'] = $info['filename'];
                    $data['filesize'] = filesize($filepath);
                    $data['md5'] = md5(file_get_contents($filepath));
                    $contents[] = $data;
                }

            }
        }
        closedir($handle);
        return $contents;
    }

    return false;
}

function addOtherPaths($paths)
{
    foreach ($paths as $path) {
        $paths[] = str_replace('/', '\\\\', $path);
    }

    return $paths;
}

?>
<script>console.log(<?php echo json_encode($items, true); ?>);</script>