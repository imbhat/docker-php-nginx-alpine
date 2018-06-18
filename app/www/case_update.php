<?php
$entryData = array(
    'category' => "caseUpdate"
  , 'title'    => "UniCourt Push Notification"
  , 'article'  => "This case has been updated"
  , 'when'     => time()
  , 'host'	=> gethostname()
);

// This is our new stuff
$context = new ZMQContext();
$socket = $context->getSocket(ZMQ::SOCKET_PUSH, 'my pusher');
$socket->connect("tcp://127.0.0.1:5555");

$socket->send(json_encode($entryData));