<?php
    include("Circle.php");
    
    // Creating first circle
    $circle = new Circle(0, 0, 1);
    $circle->setRadius(1); // Setting radius (although it's already set in constructor)
    $circle->setX(0);      // Setting X coordinate (although it's already set in constructor)
    $circle->setY(0);      // Setting Y coordinate (although it's already set in constructor)
    
    // Displaying properties of the first circle
    echo "Радіус: " . $circle->getRadius() . "<br>";
    echo "X: " . $circle->getX() . "<br>";
    echo "Y: " . $circle->getY() . "<br>";
    
    // Creating second circle
    $circle2 = new Circle(3, 3, 1);
    
    // Checking intersection between the two circles
    if ($circle->isIntersect($circle2)) {
        echo "Кола перетинаються!";
    } else {
        echo "Кола не перетинаються!";
    }
?>
