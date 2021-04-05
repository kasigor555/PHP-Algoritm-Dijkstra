<?php

include 'class/Node.php';
include 'class/Sequence.php';
include 'class/Stack.php';
include 'class/Queue.php';

$stack = new Queue();
$stack->put("John 1");
$stack->put("Alex 2");
$stack->put("Mike 3");
$stack->put("Bob 4");

foreach ($stack->getList() as $item) {
  echo $item . "<br>\n";
}

echo "=================<br>\n";

// echo "<pre>";
// var_dump($stack->get());
// echo "</pre>";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
