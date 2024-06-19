<?php


namespace task5;


class Programmer extends Human
{
    private $Languages;
    private $WorkExp;
    private $Salary;
    private $WorkPlace;

    /**
     * @return mixed
     */
    public function getLanguages()
    {
        return $this->Languages;
    }

    /**
     * @param mixed $Languages
     */
    public function setLanguages($Languages): void
    {
        $this->Languages = $Languages;
    }

    /**
     * @return mixed
     */
    public function getWorkExp()
    {
        return $this->WorkExp;
    }

    /**
     * @param mixed $WorkExp
     */
    public function setWorkExp($WorkExp): void
    {
        $this->WorkExp = $WorkExp;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->Salary;
    }

    /**
     * @param mixed $Salary
     */
    public function setSalary($Salary): void
    {
        $this->Salary = $Salary;
    }

    /**
     * @return mixed
     */
    public function getWorkPlace()
    {
        return $this->WorkPlace;
    }

    /**
     * @param mixed $WorkPlace
     */
    public function setWorkPlace($WorkPlace): void
    {
        $this->WorkPlace = $WorkPlace;
    }

    public function AddNewLanguage($LangName){
        array_push($this->Languages, $LangName);
    }

    public function getInfo()
    {
        parent::getInfo();
        echo "<span>Languages:</span>";
        echo "<ul>";
        foreach ($this->Languages as $lang){
            echo "<li>".$lang."</li>";
        }
        echo "</ul>";
        echo "Work place: ".$this->WorkPlace."<br>";
        echo "Work experience: ".$this->WorkExp." years<br>";
        echo "Salary: ". $this->Salary. "$<br>";
    }
    public function ChildBorn()
    {
        parent::ChildBorn();
    }

    protected function MessageOfChildBorn()
    {
        echo "Child was born!";

    }

    public function KitchenCleaning()
    {
        echo "Programmer is cleaning the kitchen";
    }
    public function RoomCleaning()
    {
        echo "Programmer is cleaning the room";
    }
}