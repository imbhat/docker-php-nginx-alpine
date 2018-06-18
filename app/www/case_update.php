<?php
$entryData = array(
    'category' => "caseUpdate"
  , 'title'    => "UniCourt Push Notification"
  , 'article'  => "This case has been updated"
  , 'when'     => time()
);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://172.28.128.4:5555");

$socket->send(json_encode($entryData));