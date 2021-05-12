<?php
class Node{
    public $value;
    public $next;
    public function __construct($value)
    {
        $this->value = $value;
    }
    
}

class Queue{
    public $front   = null;
    public $back    = null;
    public function isEmpty()
    {
        return is_null($this->front);
    }

    public function enqueue($value)
    {
        $oldback = $this->back;
        $node = new Node($value);
        $this->back = $node;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldback->next = $this->back;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return "Null";
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }
}
$objQueue = new Queue();
$objQueue->enqueue(1);
$objQueue->enqueue(2);
$objQueue->enqueue(3);
echo '<pre>';
    print_r( $objQueue );
echo '</pre>';
echo $objQueue->dequeue() . '<br>';
echo $objQueue->dequeue() . '<br>';
echo var_dump($objQueue->isEmpty()) . '<br>';
$objQueue->enqueue(4);
$objQueue->enqueue(5);
echo $objQueue->dequeue() . '<br>';
echo $objQueue->dequeue() . '<br>';
echo $objQueue->dequeue() . '<br>';
echo var_dump($objQueue->isEmpty()) . '<br>';
