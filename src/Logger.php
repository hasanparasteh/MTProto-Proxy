<?php

namespace TGProxy;

class Logger
{

    public static function console(string|array|null $message): void
    {
        if (is_null($message)) {
            echo time() . " | " . "NULL";
        } else if (is_array($message)) {
            echo time() . " | " . json_encode($message) . PHP_EOL;
        } else {
            echo time() . " | " . $message . PHP_EOL;
        }

    }
}