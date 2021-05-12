<?php
class Stack{
    private $data = [];
    private $limit = 5;

    //phương thức Push (đưa vào)
    public function Push($item)
    {
        if (count($this->data) < $this->limit) {
            array_unshift($this->data, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    //phương thức Pop (lấy ra)
    public function Pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->data);
        }
    }
    public function isEmpty()
    {
        // if (count($this->data == 0)) {
        //     return true;
        // } else {
        //     return false;
        // }

        return empty($this->data);
    }

    //xem mà k xóa
    public function Top()
    {
        return current($this->data);
    }
}
$objStack = new Stack();
$objStack->Push('Hùng');
$objStack->Push('Đạt');
$objStack->Push('A Hà');
$objStack->Push('Châu');
$objStack->Push('Hoàn');
echo '<br>' . $objStack->Pop();
// echo '<br>' . $objStack->Pop();
// echo '<br>' . $objStack->Pop();
// echo '<br>' . $objStack->Pop();
// echo '<br>' . $objStack->Pop();
echo '<br>' . $objStack->Top();
