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
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone){
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;

    }

    public function Hello(){
    echo "Hello from person";

    }

}

class Employee  extends Person {
    private $salary;

    public function __construct($name, $age, $phone,$salary ){
        $this->salary = $salary;
        parent::__construct($name, $age, $phone);


    }

    public function Hello(){
        echo "Hello from employee: $this->name "  . " my age is:  $this->age" . " My salary is: $this->salary";

    }



}

class Student extends Person {

    public $studentId;

    public function __construct($name, $age, $phone,$studentId ){
        parent::__construct($name, $age, $phone);
        $this->studentId = $studentId;

    }

    public function Hello(){
        return  "Hello from student: $this->name "  . "my age is: $this->age " . "my student ID is:  $this->studentId";

    }



}


$employee = new Employee($name = 'Methuselah',$age = '969', $phone = '01913841221',$salary = '20000' );
echo $employee->Hello();
echo "<br />";
$Student = new Student($name = 'Tim dim',$age = '19', $phone = '123456', $studentId = '9999');
echo $Student->Hello();
