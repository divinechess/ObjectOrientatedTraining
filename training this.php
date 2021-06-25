/*
class Vehicle {
   public static $id = 1;
   public $vehicle_type = "car";
   public $colour = "red";
   public $wheels = 4;
   public static $doors = 5;

   public function generate_id (){
        return rand(0,9999);

   }

   public function calculate_doors(){

     return  $doors = 3 * 3;
   }


}*/
/*
echo Vehicle::generate_id(); // call to function is ok no need to instantiate

echo Vehicle::$id; // Cant access this way as expecting a static property for this type of call
// if we change the $id to static we can now access

$vehicle = new Vehicle();
echo $vehicle->calculate_doors(); // instantiate and call function which returns value for $doors
// inside the function but not the value inside the attribute
//for example :

echo Vehicle::$doors; // now we have the output from two $doors values 1 in side the function
// and 1 from the attribute
<?php


class Vehicle {
   public static $id = 1;
   public $vehicle_type = "car";
   public $colour = "red";
   public $wheels = 4;
   public $doors = 5;

   public function generate_id (){
        return rand(0,9999);

   }

   public function calculate_doors(){

     return  $this->doors = 3 * 3;
   }

   public function read(){
       return $this->doors;
   }


}

$vehicle2 = new Vehicle();
echo $vehicle2->calculate_doors();
// here we get a notice :
// Notice: Accessing static property Vehicle::$doors as non static
// in C:\xampp\htdocs\ObjectOrientatedTraining\training this.php on line 51
// the value is 9
// get this because we are instantiating not accessing the value as static
// but this proves that we are accessing the attribute that is outside the
// method calculate_doors();
echo "<br />";
// echo Vehicle::$doors; // note the value is the class value i,e 5 on the attribute field
echo "<br />";
//
// lets instantiate another class
$vehicle10 = new Vehicle();
echo $vehicle10->read();

