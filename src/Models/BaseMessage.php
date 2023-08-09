<?php

namespace TGProxy\Models;

class BaseMessage
{

    public ?int $length = null;
    public ?string $payload = null;

    /**
     * @param int|null $length
     * @param string|null $payload
     */
    public function __construct(?int $length, ?string $payload)
    {
        $this->length = $length;
        $this->payload = $payload;
    }


}