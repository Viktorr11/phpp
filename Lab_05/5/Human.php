<?php

namespace task5;
include ("HouseCleaning.php");


abstract class Human implements HouseCleaning
{
    private $Height;
    private $Weight;
    private $Age;
    private $Name;
    private $Surname;

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param mixed $Height
     */
    public function setHeight($Height): void
    {
        $this->Height = $Height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param mixed $Weight
     */
    public function setWeight($Weight): void
    {
        $this->Weight = $Weight;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @param mixed $Age
     */
    public function setAge($Age): void
    {
        $this->Age = $Age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param mixed $Surname
     */
    public function setSurname($Surname): void
    {
        $this->Surname = $Surname;
    }

    public function getInfo(){
        echo "Name: ".$this->Name."<br>";
        echo "Surname: ".$this->Surname."<br>";
        echo "Age: ".$this->Age."<br>";
        echo "Height: ".$this->Height."<br>";
        echo "Weight: ".$this->Weight."<br>";
    }

    protected function ChildBorn(){
        $this->MessageOfChildBorn();
    }

    protected abstract function MessageOfChildBorn();
}