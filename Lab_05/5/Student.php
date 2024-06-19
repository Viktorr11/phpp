<?php


namespace task5;


class Student extends Human
{
    private $UniversityName;
    private $CourseNumber;
    private $GroupName;
    private $OnScholarship;

    /**
     * @return mixed
     */
    public function getUniversityName()
    {
        return $this->UniversityName;
    }

    /**
     * @param mixed $UniversityName
     */
    public function setUniversityName($UniversityName): void
    {
        $this->UniversityName = $UniversityName;
    }

    /**
     * @return mixed
     */
    public function getCourseNumber()
    {
        return $this->CourseNumber;
    }

    /**
     * @param mixed $CourseNumber
     */
    public function setCourseNumber($CourseNumber): void
    {
        $this->CourseNumber = $CourseNumber;
    }

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }

    /**
     * @param mixed $GroupName
     */
    public function setGroupName($GroupName): void
    {
        $this->GroupName = $GroupName;
    }

    /**
     * @return mixed
     */
    public function getOnScholarship()
    {
        return $this->OnScholarship;
    }

    /**
     * @param mixed $OnScholarship
     */
    public function setOnScholarship($OnScholarship): void
    {
        $this->OnScholarship = $OnScholarship;
    }

    public function TurnToNextCourse(){
        $this->CourseNumber++;
    }

    public function getInfo()
    {
        parent::getInfo();
        echo "University name: ".$this->UniversityName."<br>";
        echo "Course number: ".$this->CourseNumber."<br>";
        echo "Group name: ".$this->GroupName."<br>";
        if($this->OnScholarship){
            echo "Has scholarship";
        }
        else{
            echo "Has not scholarship";
        }
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
        echo "Student is cleaning the kitchen";
    }
    public function RoomCleaning()
    {
        echo "Student is cleaning the room";
    }
}