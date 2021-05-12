<?php
class Queue{
    private $data = [];
    public function enQueue($item)
    {
        array_push($this->data, $item);
    }
    public function deQueue()
    {
        if ($this->isEmpty()) {
            throw new Exception("Array is Empty!");
        } else {
            return array_shift($this->data);
        }
    }
    public function isEmpty()
    {
        return empty($this->data);
    }

    //xem mà k xóa
    public function Peek()
    {
        return current($this->data);
    }
}
$objQueue = new Queue();
$objQueue->enQueue('Hùng');
$objQueue->enQueue('Đạt');
$objQueue->enQueue('A Hà');
$objQueue->enQueue('Châu');
$objQueue->enQueue('Hoàn');
echo '<pre>';
    print_r( $objQueue );
echo '</pre>';
echo $objQueue->deQueue();
echo '<pre>';
    print_r( $objQueue );
echo '</pre>';
