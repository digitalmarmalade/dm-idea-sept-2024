<?php

/*  
example usage
<script>@include('_inliner', array('file' => '/vendor/Miracl/Portal/js/distributors.js', 'min' => false))</script>
*/

//  must have been passed a filename
if (!isset($file)) {
    return false;
}

//  this file must exist
$filepath = dirname(__FILE__) . DIRECTORY_SEPARATOR  . $file;
if (!file_exists($filepath)) {
    echo '<!-- file not found ' . $file . ' -->';
    return false;
}

//  get the file content
$content = file_get_contents($filepath);
$output = $content;


//  by default we will minimise
$minify = true;

//  temporarily prevent this by adding min=false to the URL
$minify = (array_key_exists('min', $_GET) AND $_GET['min'] === 'false') ? false : $minify;

//  or permanently by adding 'min' => false to the input array
$minify = (isset($min) AND $min === false) ? false : $minify;


//  output the content
if ($minify) {
    //  remove comments and minimise
    $output = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $output);
    $output = preg_replace('!//.*?\n!', '', $output);
    $output = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $output);
    echo "$output \n\n";
} else {
    if (array_key_exists('min', $_GET) AND $_GET['min'] === 'false') {
        echo "\n" . '<!-- ' . $file . ' -->' . "\n";
    }
    echo "$output \n\n";
}

?>