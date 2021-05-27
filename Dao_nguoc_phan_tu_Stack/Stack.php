<?php
class Stack
{
    public array $stack;
    public int $n;
    public function __construct($stack=[],$n)
    {
        $this->stack=$stack;
        $this->n=$n;
    }
    public function push($item)
    {
        if (count($this->stack) < $this->n) {
            array_unshift($this->stack, $item);
        } else {
            echo "stack is full";
        }
    }
    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function pop()
    {
            $arr=[];
           for($i=count($this->stack)-1;$i>=0;$i--){
               array_push($arr,$this->stack[$i]);
           }
           return $arr;
    }
}
