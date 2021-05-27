<?php
include_once "Queue.php";
$queue=new Queue(4);
$queue->enqueue(12);
$queue->enqueue(24);
$queue->enqueue(10);
echo "<pre>";
print_r($queue);
$queue->dequeue();
$queue->dequeue();
var_dump( $queue->isEmpty());
$queue->enqueue(16);
$queue->enqueue(18);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
var_dump($queue->isEmpty());

