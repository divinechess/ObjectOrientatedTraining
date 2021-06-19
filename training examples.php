<?php
class Animal {
    protected $animal_name;
    protected $favourite_food;
    protected $sound;
    protected $id;
    public static $number_of_animals = 0;


    public function getName(){

        return $this->animal_name;
    }

    function __construct(){

            $this->id = rand(100,1000000);
            echo $this->id . " Has been assigned  <br/>" ;
            Animal::$number_of_animals++;
    }

/*    function __destruct(){

        echo $this->name . "Is being destroyed";
    }*/

    public function __get($name){
        echo "Asked for " . $name . "<br />";

         switch ($name){
            case "animal_name" :
                return $this->animal_name;
                break;

             case "favourite_food" :
                 return $this->favourite_food;
                 break;

             case "sound" :
                 return $this->sound;
                 break;

             default :
                 echo $name . "Not found";

        }
        return $this->animal_name;

    }

    public function __set($name, $value){
        switch ($name){

            case "name" :
                $this->animal_name = $value;
                break;

            case "favourite_food" :
                $this->favourite_food = $value;
                break;

            case "sound" :
                $this->sound = $value;
                break;

            default :
                echo $name . "Not found";

        }
        echo "Set " . $name . " to " . $value . "<br />";



    }

    public function run(){

        echo $this->animal_name . " Runs <br />";
    }

}

class Dog extends Animal{
    public function run(){

        echo $this->animal_name . " Runs faster <br />";
    }


}

$new_animal = new Animal();

// $new_animal->set($name = "Rex", $favourite_food = "Meat", $sound = "bark");
$new_animal->__set("name", "Rex");
$new_animal->__set("favourite_food", "Meat");
$new_animal->__set("sound", "Barking");
//$new_animal->getName();
echo "Total animals = " . Animal::$number_of_animals;
echo "<br />";

echo $new_animal->animal_name . "<br />";
echo $new_animal->favourite_food . "<br />";
echo $new_animal->sound . "<br />";
echo $new_animal->run();

echo "<br />";
echo "<br />";

$new_dog = new Dog();

$new_dog->__set("name", "Fido");
$new_dog->__set("favourite_food", "Pedigree Chum");
$new_dog->__set("sound", "Barks like a mad dog");
echo "Total animals = " . Animal::$number_of_animals . "<br />";

echo $new_dog->animal_name . "<br />";
echo $new_dog->favourite_food . "<br />";
echo $new_dog->sound . "<br />";
echo $new_dog->run();




