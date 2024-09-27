<?php

//  default stuff
$defaultWidth = 300;
$defautHeight = 300;
$defaultText = 'Enter Text';
$defaultFg = '000000';
$defaultBg = 'FFFFFF';
$defaultFontSize = '20';


//  work out some stuff
$w = isset($_GET['w']) ? $_GET['w'] : $defaultWidth;
$h = isset($_GET['h']) ? $_GET['h'] : $defautHeight;
$tx = isset($_GET['tx']) ? $_GET['tx'] : $defaultText;
$fg = isset($_GET['fg']) ? $_GET['fg'] : $defaultFg;
$bg = isset($_GET['bg']) ? $_GET['bg'] : $defaultBg;
$fs = isset($_GET['fs']) ? $_GET['fs'] : $defaultFontSize;



$bgDec = array(
    'R' => hexdec(substr($bg, 0, 2)),
    'G' => hexdec(substr($bg, 2, 2)),
    'B' => hexdec(substr($bg, 4, 2))
);
$fgDec = array(
    'R' => hexdec(substr($fg, 0, 2)),
    'G' => hexdec(substr($fg, 2, 2)),
    'B' => hexdec(substr($fg, 4, 2))
);
$filename = trim(strtolower($tx)) . '.png';
$filename = str_replace('<br />', '-', $filename);
$filename = str_replace(' ', '-', $filename);



// Set the content-type
header('Content-Type: image/png');
if (array_key_exists('download', $_GET)) {
    header('Content-Disposition: attachment; filename="'.$filename.'"');
}


// Create the image
$im = imagecreatetruecolor($w, $h);
imagealphablending($im, true);
  imagesavealpha($im, true);

//  create colours
$fgCol = imagecolorallocate($im, $fgDec['R'], $fgDec['G'], $fgDec['B']);
$bgCol = imagecolorallocate($im, $bgDec['R'], $bgDec['G'], $bgDec['B']);
$shadow = imagecolorallocate($im, ($fgDec['R'] + $bgDec['R']) / 2, ($fgDec['G'] + $bgDec['G']) / 2, ($fgDec['B'] + $bgDec['B']) / 2);

//  set background
imagefilledrectangle($im, 0, 0, $w, $h, $bgCol);


//  set font
$font = 'clarke_regular-webfont.ttf';


$tb = imagettfbbox($fs, 0, $font, $tx);
$lineHeight = $tb[1] - $tb[7];
$lineMargin = 3;

//  get centralised coords
$txLines = explode('<br />', $tx);
$totalHeight = ($lineHeight + ($lineMargin * 2)) * count($txLines);
$startY = ceil(($h - $totalHeight) / 2);
$idx = 1;
foreach($txLines as $tx) {
    $tb = imagettfbbox($fs, 0, $font, $tx);
    $x = ceil(($w - $tb[2]) / 2);
    $y = ceil(($startY) + ($idx * ($lineHeight + ($lineMargin * 2))));

    imagettftext($im, $fs, 0, $x + 1, $y + 1, $shadow, $font, $tx);  // Add some shadow to the text
    imagettftext($im, $fs, 0, $x, $y, $fgCol, $font, $tx);  // Add the text
    $idx++;
}

imagepng($im);
imagedestroy($im);

?>