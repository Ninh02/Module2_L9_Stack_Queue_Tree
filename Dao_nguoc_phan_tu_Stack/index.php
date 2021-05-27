<?php
include_once "Stack.php";
$stack=new Stack([],4);
$stack->push("Đắc nhân tâm ");
$stack->push("Bong bóng lên trời ");
$stack->push("Hai số phận ");
$stack->push("Búp sen xanh ");
echo "<pre>";
print_r($stack);
echo "<pre>";
print_r($stack->pop());

