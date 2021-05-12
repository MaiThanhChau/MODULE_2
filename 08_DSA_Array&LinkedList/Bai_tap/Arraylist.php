<?php
class MyList{
    protected int   $size       = 0;
    protected array $elements    = [];
    
    //chèn - chỉ số, đối tượng (chuỗi,số...)
    public function insert($index, $obj) :void
    {
        
    }

    //thêm vào - đối tượng
    public function add($obj) :void
    {
        $this->elements[] = $obj;
    }

    //xóa - chỉ số
    public function remove($index) :void
    {
        // unset($this->elements[$index]); // giữ nguyên chỉ số
        array_splice($this->elements, $index, 1); // thay đổi chỉ số
    }

    //lấy - chỉ số
    public function get($index) :string
    {
        return $this->elements[$index];
    }

    //làm trống
    public function clear() :void
    {
        $this->elements = [];
    }

    //thêm tất cả - mảng
    public function addAll($array) :array
    {
        if (is_array($array)) {
            return $this->elements = $array;
        } else {
            die ("ERRO!!!");
        }
    }

    //chỉ số của - đối tượng
    public function indexOf($obj) :int
    {
        return array_search($obj, $this->elements);
    }

    //kiểm tra rỗng
    public function isEmpty() :bool
    {
        $flag = false;
        if (count($this->elements) == 0) {
            $flag = true;
        }
        return $flag;
    }

    //sắp xếp
    public function sort() :bool
    {
        return sort($this->elements);
    }

    //đặt lại
    public function reset() :string
    {
        return reset($this->elements);
    }

    //kích thước
    public function size() :int
    {
        return $this->size = count($this->elements);
    }
}

$objMyList = new MyList();
$objMyList->add('Hùng');
$objMyList->add('Đạt');
$objMyList->add('A Hà');
$objMyList->add('Châu');
$objMyList->add('Hoàn');
echo $objMyList->get(1);
$objMyList->remove(1);
echo '<pre>';
    print_r( $objMyList );
echo '</pre>';
echo $objMyList->get(1);
$objMyList->clear();
echo '<pre>';
    print_r($objMyList);
echo '</pre>';
$array = ['Hùng','Đạt','A Hà','Châu','Hoàn'];
$objMyList->addAll($array);
echo '<pre>';
    print_r( $objMyList );
echo '</pre>';
echo $objMyList->indexOf('Châu') . '<br>';
var_dump($objMyList->isEmpty());
$objMyList->sort();
echo '<pre>';
    print_r( $objMyList );
echo '</pre>';
echo $objMyList->reset() . '<br>';
echo $objMyList->size();

