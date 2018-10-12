<?php


class Utils
{
    public static function trimText(
        string $text,
        string $ending = '...',
        int $length = MAX_PREVIEW_TEXT_LENGTH
    )
    {
        if (strlen($text) > $length) {
            return mb_substr($text, 0, $length - strlen($ending)).$ending;
        }

        return $text;
    }
}