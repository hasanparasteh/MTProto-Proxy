<?php

namespace TGProxy;

class Methods
{

    /**
     * Generate a random 16 byte proxy secret
     * @throws \Exception
     */
    public static function secret(): string
    {
        return bin2hex(random_bytes(16));
    }

    public static function binary2hex(string $binary): string
    {
        $hex = '';
        for ($i = 0; $i < strlen($binary); $i++) {
            $hex .= sprintf('%02x', ord($binary[$i]));
        }
        return $hex;
    }
}