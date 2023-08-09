<?php

namespace TGProxy\Payloads;

use TGProxy\Models\AbridgedMessage;

class Abridged implements PayloadInterface
{

    /**
     * Read a MTProto transport protocol envelope from a string.
     *
     * @param string $data
     * @return \TGProxy\Models\AbridgedMessage
     */
    public function read(string $data): AbridgedMessage
    {
    }

    public function create(string $payload, int $length): string
    {
    }
}