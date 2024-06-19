<?php

class Circle
{
    private $X;
    private $Y;
    private $Radius;

    public function __construct($x, $y, $radius)
    {
        $this->X = $x;
        $this->Y = $y;
        $this->Radius = $radius;
    }

    public function __toString()
    {
        return "Circle with center at ({$this->X}, {$this->Y}) and radius {$this->Radius}";
    }

    public function getRadius()
    {
        return $this->Radius;
    }

    public function getX()
    {
        return $this->X;
    }

    public function getY()
    {
        return $this->Y;
    }

    public function setRadius($radius)
    {
        $this->Radius = $radius;
    }

    public function setX($x)
    {
        $this->X = $x;
    }

    public function setY($y)
    {
        $this->Y = $y;
    }

    public function isIntersect(Circle $circle): bool
    {
        $distance = sqrt(pow($circle->getX() - $this->X, 2) + pow($circle->getY() - $this->Y, 2));
        $sumOfRadii = $this->Radius + $circle->getRadius();
        
        return $distance <= $sumOfRadii;
    }
}

// Example usage:
$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(10, 0, 8);

echo $circle1 . "<br>";
echo $circle2 . "<br>";

if ($circle1->isIntersect($circle2)) {
    echo "Circle 1 intersects with Circle 2.<br>";
} else {
    echo "Circle 1 does not intersect with Circle 2.<br>";
}
?>
