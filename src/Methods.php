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
        return 'dd' . self::bin2hex(random_bytes(16));
    }

    public static function bin2hex(string $binary): string
    {
        return unpack("H*", $binary)[1];
    }

    public static function hex2bin(string $hex): string
    {
        return pack("H*", $hex);
    }

    public static function ctr_encrypt(string $key, string $iv, string $data): string
    {
        return self::bin2hex(
            openssl_encrypt(
                $data,
                "aes-256-ctr",
                $key,
                OPENSSL_RAW_DATA,
                $iv
            )
        );
    }

    public static function ctr_decrypt(string $key, string $iv, string $data): string
    {
        return openssl_decrypt(
            self::hex2bin($data),
            "aes-256-ctr",
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }

}