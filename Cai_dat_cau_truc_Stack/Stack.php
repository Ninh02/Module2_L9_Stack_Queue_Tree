<?php

class Stack
{
    public array $stack;
    public int $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
             array_unshift($this->stack, $item);
        } else {
            echo "stack is full";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
             array_shift($this->stack);
        } else {
            echo "stack is empty";
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}

