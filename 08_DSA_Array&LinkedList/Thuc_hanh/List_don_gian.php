<?php
class ArrayList{
    public $arrayList;
    public function __construct($array)
    {
        if (is_array($array)) {
            $this->arrayList = $array;
        } else {
            $this->arrayList = [];
        }
    }
    public function get($index)
    {
        if ($this->checkIndex($index)==1 && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die ( "ERRO!!!" );
        }
    }
    public function checkIndex($index)
    {
        return preg_match("/^[0-9]+$/", $index);
    }
    public function size()
    {
        return count($this->arrayList);
    }
}
$array = [1,2,3,4,5];
$ArrayList = new ArrayList($array);
echo $ArrayList->get(1) . '<br>';
echo $ArrayList->get(-1) . '<br>';
// echo $ArrayList->get(6) . '<br>';