<?php
$w = isset($_GET['w']) ? $_GET['w'] : 160;
$h = isset($_GET['h']) ? $_GET['h'] : $w;
$tx = isset($_GET['tx']) ? $_GET['tx'] : 'Enter Text';
$fg = isset($_GET['fg']) ? substr($_GET['fg'],1) : '000000';
$bg = isset($_GET['bg']) ? substr($_GET['bg'],1) : 'FFFFFF';
$fs = isset($_GET['fs']) ? $_GET['fs'] : '14';
?>

<style>
    body { background:#eee; }
    .cf:before,.cf:after{content:" ";display:table}.cf:after,.clear-both{clear:both}
    iframe { border:none; float:left; margin:6px 0; }
    label { line-height: 30px; height: 30px; vertical-align: bottom; }
    input[type=text] { padding:5px; width:160px; }
    input[type=color] { height: 32px; width: 32px; border: 0; }
    input[type=range].horizontal { height: 32px; width: 410px; border: 0; margin: 0 0 0 131px; }
    input[type=range].vertical { float:left; height: 411px; width: 32px; border: 0; margin:99px 6px 0 0; -webkit-appearance: slider-vertical; transform:rotateZ(180deg); }

    textarea { padding:5px; height: 42px; width: 300px; border: 1px solid #aaa; font-family: arial; }
    button { padding: 5px 10px; }
    input[type=submit]  { padding: 5px 10px; }
</style>



<form>

    <div class="cf">
        <input type="range" name="w" min="100" max="500" value="<?php echo $w; ?>" class="horizontal">
    </div>

    <div class="cf">
        <input type="range" name="h" min="100" max="500" value="<?php echo $h; ?>" orient="vertical" class="vertical">
        <iframe src="imagegeniframe.php?tx=<?php echo nl2br($tx); ?>&fg=<?php echo $fg; ?>&bg=<?php echo $bg; ?>&fs=<?php echo $fs; ?>&w=<?php echo $w; ?>&h=<?php echo $h; ?><?php echo isset($_GET['download']) ? '&download=1' :''; ?>" width="<?php echo $w; ?>" height="<?php echo $h; ?>"></iframe>
    </div>

    <p>
        <textarea id="tx" name="tx"><?php echo $tx; ?></textarea>
    </p>

    <p>
        <input type="range" name="fs" min="10" max="40" value="<?php echo $fs; ?>">
    </p>

    <p>
        <input id="fg" name="fg" type="color" value="#<?php echo $fg; ?>" />
        <label for="fg">Foreground Color</label>
    </p>

    <p>
        <input id="bg" name="bg" type="color" value="#<?php echo $bg; ?>"/>
        <label for="bg">Background Color</label>
    </p>



    <button>Generate</button>

    <input type="submit" value="Download" name="download"/>

</form>
