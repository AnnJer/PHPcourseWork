<?php

namespace core;


class Linker
{
    public static function linkImage(string $name): string {
        return ROOT_DIR.'/images/'.$name;
    }
}