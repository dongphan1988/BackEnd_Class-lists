<?php


class ArrayList
{
public $array = [];
public function __construct()
{
    echo "ham duoc khoi tao <br>";
}
public function getArray(){
    return $this->array;
}
public function add($item){
    array_push($this->array,$item);
}
public function get($index){
    if($index>=0 && $index<= count($this->array)) {
        return $this->array[$index];
    }else{
        die("ERROR in ArrayList.get");
    }
}
public function remove($index){
    unset($this->array[$index]);
    return $this->array;
}
}

