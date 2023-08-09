<?php

namespace TGProxy\Payloads;

use TGProxy\Models\BaseMessage;

interface PayloadInterface
{

    public function read(string $data): BaseMessage;

    public function create(string $payload, int $length): string;
}