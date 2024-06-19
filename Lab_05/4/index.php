<?php
include("Human.php");
include("Programmer.php");
include("Student.php");

    $human = new Human();
    $human->setName("Ivan");
    $human->setSurname("Ivanenko");
    $human->setAge(20);
    $human->setHeight(180);
    $human->setWeight(70);
    echo "<fieldset style='width: 175px;margin: auto;'><legend style='background-color: #000;color: #fff; padding: 3px 6px;'>Human</legend>";
    $human->getInfo();
    echo "</fieldset>";

    //--------
    echo "<hr>";
    //--------

    $student = new Student();
    $student ->setName("Petro");
    $student->setSurname("Petrenko");
    $student->setAge(19);
    $student->setHeight(175);
    $student->setWeight(65);
    $student->setUniversityName("ZTU");
    $student->setCourseNumber(2);
    $student->TurnToNextCourse();
    $student->setGroupName("IPZ-21-2");
    $student->setOnScholarship(true);
    echo "<fieldset style='width: 175px; margin: auto;'><legend style='background-color: #000;color: #fff; padding: 3px 6px;'>Student</legend>";
    $student->getInfo();
    echo "</fieldset>";

    //--------
    echo "<hr>";
    //--------

    $programmer = new Programmer();
    $programmer->setName("Mykola");
    $programmer->setSurname("Mykolenko");
    $programmer->setAge(27);
    $programmer->setHeight(185);
    $programmer->setWeight(80);
    $programmer->setLanguages(["JavaScript", "Python", "PHP", "C#", "Java"]);
    $programmer->AddNewLanguage("Ruby");
    $programmer->setSalary(5000);
    $programmer->setWorkPlace("Google");
    $programmer->setWorkExp(5);
    echo "<fieldset style='width: 175px;margin: auto;'><legend style='background-color: #000;color: #fff; padding: 3px 6px;'>Programmer</legend>";
    $programmer->getInfo();
    echo "</fieldset>";