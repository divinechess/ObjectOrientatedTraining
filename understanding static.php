<?php

class Product {
    public static $total = 0;

    public function calculate_total(){

        self::$total = 10 * 10;
        return self::$total;
    }

    public function set_total($newtotal){
     return $this->total = $newtotal;

    }

}

$book = new Product(); // create instance
echo $book::$total;
echo "<br />";
echo $book->calculate_total(); // Uses instance to change a static value
echo "<br />";
$book2 = new Product(); // instantiation
echo $book2::$total;
