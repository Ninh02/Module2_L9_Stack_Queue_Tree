<?php
class Queue
{
    public $front = null;
    public $back = null;
    public $size;
    public $queue;
    public function __construct($size,$queue=[])
    {
        $this->size=$size;
        $this->queue=$queue;
    }
    public function isEmpty():bool
    {
        return count($this->queue)==0;
    }
    public function enqueue($item)
    {
        if(count($this->queue)<$this->size) {
            array_push($this->queue, $item);
        }else{
            echo "queue da day";
        }
    }
    public function dequeue()
    {
        if(!$this->isEmpty()) {
            array_shift($this->queue);
        }else{
            echo "queue khong co phan tu nao";
        }
    }

}