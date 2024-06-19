<?php


class Rectangle
{
    private $X;
    private $Y;
    private $Width;
    private $Height;
    private $UniqueId;
    static private $NextUniqueId = 0;

    public function __construct($x, $y, $width, $height)
    {
        $this->UniqueId = Rectangle::$NextUniqueId;
        Rectangle::$NextUniqueId++;
        $this->X = $x;
        $this->Y = $y;
        $this->Width = $width;
        $this->Height = $height;
    }

    public function __clone()
    {
        $this->UniqueId = Rectangle::$NextUniqueId;
        Rectangle::$NextUniqueId++;
    }


    public function setX(int $X): void
    {
        $this->X = $X;
    }


    public function getX(): int
    {
        return $this->X;
    }


    public function setY(int $Y): void
    {
        $this->Y = $Y;
    }


    public function getY(): int
    {
        return $this->Y;
    }


    public function getHeight(): int
    {
        return $this->Height;
    }


    public function setHeight(int $Height): void
    {
        $this->Height = $Height;
    }

    public function getWidth(): int
    {
        return $this->Width;
    }

    public function setWidth(int $Width): void
    {
        $this->Width = $Width;
    }

    public function getUniqueId(): int
    {
        return $this->UniqueId;
    }


}