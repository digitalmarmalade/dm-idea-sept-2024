<?php

namespace App\Http\Resources\DigitalMarmalade\Debug\Dumper;

/**
 * Wrapper around the \Illuminate\Support\Debug\Dumper class for easier usage
 */
class Dumper {
    
    static public function get($data)
    {
        ob_start();
        self::output($data);
        $output = ob_get_contents();
        ob_end_clean();
        return htmlentities($output);
    }
    
    static public function output($data)
    {
        (new \Illuminate\Support\Debug\Dumper)->dump($data);
    }
    
}
