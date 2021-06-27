<?php

interface Shape {
    public function draw();
    public function colour();
}

class Square implements Shape {
    public function draw(){}
    public function colour (){}
}

class Triangle implements Shape {
    public function draw(){}
    public function colour (){}
}

class Circle implements Shape {
    public function draw(){}
    public function colour (){}
}

class Painter {
    public function addShape(Shape $shape){  //coupling the class here (Circle $shape) and not good as restricts other shapes
        return $shape->draw();
    }
// We get round this by adding an interface, Shape is now the interface type
}
$circle = new Circle();
$painter = new Painter();
$painter->addShape($circle);
