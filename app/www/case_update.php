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
$socket->connect("tcp://10.32.0.8:5555");

$socket->send(json_encode($entryData));