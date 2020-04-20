<?php
include "MyList.php";

$myList= new MyList();
$myList->insert(0,2);
$myList->insert(1,4);
$myList->add(4);
$myList->remove(0);
var_dump($myList->getList());
