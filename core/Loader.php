<?php

namespace core;


class Loader
{
    protected $extensions;

    function __construct($fileExtensions = null)
    {
        $this->extensions = $fileExtensions;
    }


    function loadDir(string $path) {

        $path .= "/";

        $dir = scandir($path);

        foreach ($dir as $value) {

            if($value === '.' || $value === '..') {
                continue;
            }

            $filename = $path . $value;

            if(is_file(  $filename )) {
                $this->loadFile($filename);
            } else {
                $this->loadDir( $filename );
            }
        }
    }

    protected function loadFile($filename): void
    {
        if ($this->checkExtension($filename)) {
            require_once($filename);
        }
    }


    private function checkExtension(string $filename): bool {
        if ($this->extensions !== null) {

            foreach ($this->extensions as $extension) {
                if (strpos($filename, $extension) !== false) {
                    return true;
                }
            }
            return false;
        }

        return true;
    }
}