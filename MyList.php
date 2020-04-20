<?php


class MyList
{
    public $size;
    public $elements = [];

    public function __construct()
    {
        $this->size = null;
    }

    public function size()
    {
        return count($this->elements);
    }

    public function insert($index, $obj)
    {
        if ($index < 0 || $index > $this->size()) {
            die("index out of array");
        }
        $this->elements[$index] = $obj;
        $this->size++;
    }

    public function add($obj)
    {
        $this->elements[$this->size()] = $obj;
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newList = [];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newList[] = $this->get($i);
                }
            }
            $this->elements = $newList;
        } else {
            die("Error in MyList->remove");
        }
    }

    public function isInteger($index)
    {
        return preg_match("/^[0-9]+$/", $index);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("Error in MyList->get");
        }
    }

    public function clear()
    {
        $this->elements = [];
        $this->size = 0;
    }

    public function indexOf($obj)
    {
        for ($i = 0; $i < $this->size(); $i++) {
            if ($this->elements[$i] == $obj) {
                return $i;
                break;
            }
        }
        return -1;
    }

    public function getList()
    {
        return $this->elements;
    }

}