<?php
   
    $sub1 = $_POST['dbms'];
    $sub2 = $_POST['data'];
    $sub3 = $_POST['iot'];
    $sub4 = $_POST['php'];

    $total = $sub1+$sub2+$sub3+$sub4;
    $percentage = ($total/400)*100;

    if ($percentage >= 90) {
        $grade = "A";
    } elseif ($percentage >= 80) {
        $grade = "B";
    } elseif ($percentage >= 70) {
        $grade = "C";
    } elseif ($percentage >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    echo "Your Results<br><br>";
    echo "Total Marks = $total <br><br>";
    echo "Percentage = $percentage <br><br>";
    echo "Grade = $grade <br>";


?>