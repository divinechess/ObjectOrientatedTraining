<?php
/*
class ParentClass {

    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    protected const MY_CONSTANT = "Parent Constant";
    public function getProperty2() : string {  //method called from child class will be 22
        return $this->property2;
    }

    public function getText (string $text){

        echo $text;

    }

}

class ChildClass extends ParentClass  {
    public $property1 = '11';
    protected $property2 = '22';
   // protected const MY_CONSTANT = "Child Constant";

    public function getProperty2() : string {
       $result = ParentClass::getProperty2();
        return "something extra from child class " . $result;
    }

    public function getText (string $text){

        echo $text;

    }

    public function getConstant(){
        return self::MY_CONSTANT;

    }

}

$obj = new ChildClass();
echo $obj->property1 . "<br />";
echo $obj->getProperty2();
echo $obj->getConstant();*/


class Person {
    public $name = 'john';
    protected $age;
    private $phone;

    public function __contruct($name, $age, $phone){
        $this->name = $name;
        $this->age = $age;
        $age->phone = $phone;


    }

}

class Employee  extends Person {
    private $salary;

    public function __contruct($name, $age, $phone,$salary ){
        parent::__construc($name, $age, $phone);
        $this->$salary = $salary;


    }

}


$person = new Person();
echo $person->name = 'Tim';

