<?php

namespace TGProxy;

use React\EventLoop\LoopInterface;
use React\Socket\SocketServer;

class Client
{
    protected SocketServer $server;

    public function __construct(LoopInterface $loop, string $uri = "tcp://0.0.0.0:9090")
    {
        $this->server = new SocketServer($uri, [], $loop);
    }
}