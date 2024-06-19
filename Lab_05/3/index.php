<?php
    include ("Rectangle.php");
    $rec1 = new Rectangle(0,0,200,200);
    $rec2 = new Rectangle(50,50,100,100);
    $rec3 = clone $rec1;
    $rec4 = clone $rec2;
    echo "Rectangle 1 id = ".$rec1->getUniqueId()."<br>";
    echo "Rectangle 2 id = ".$rec2->getUniqueId()."<br>";
    echo "Rectangle 3 id = ".$rec3->getUniqueId()."<br>";
    echo "Rectangle 4 id = ".$rec4->getUniqueId()."<br>";