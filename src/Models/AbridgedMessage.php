<?php

namespace TGProxy\Models;

class AbridgedMessage extends BaseMessage
{

    public ?string $header = null;

    public function __construct(?int $length, ?string $payload, ?string $header)
    {
        $this->header = $header;
        $this->payload = $payload;
        $this->length = $length;

        parent::__construct($length, $payload);
    }


}