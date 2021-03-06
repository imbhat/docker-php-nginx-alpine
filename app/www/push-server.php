<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use PushNotification\Pusher;

require 'init.php';

$server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Pusher()
            )
        ),
        8082
    );
$server->run();