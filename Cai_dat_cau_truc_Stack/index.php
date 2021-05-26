<?php
include_once "Stack.php";
$stack=new Stack(10);
$stack->push("Bong bóng lên trời ");
$stack->push("Cha giau cha nghèo");
$stack->push("Hai số phận ");
$stack->push("Bài học diệu kì từ chiếc xe rác ");
$stack->push("Tôi thấy hoa vàng trên cỏ xanh ");
$stack->pop();
echo "<pre>";
print_r( $stack->stack);

echo $stack->top();
