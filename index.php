<?php

include 'class/Node.php';
include 'class/Sequence.php';
include 'class/Stack.php';
include 'class/Queue.php';

$stack = new Queue();
$stack->put("John");
$stack->put("Alex");
$stack->put("Mike");
$stack->put("Bob");

// echo "<pre>";
// var_dump($stack->get());
// echo "</pre>";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
