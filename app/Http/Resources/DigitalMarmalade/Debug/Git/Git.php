<?php

namespace App\Http\Resources\DigitalMarmalade\Debug\Git;

/**
 * Factory class for the \SebastianBergmann\Git\Git class
 */
class Git
{
    public static function make()
    {
        return new \SebastianBergmann\Git\Git(app_path());
    }
}
