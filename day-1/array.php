<?php
    $numbers = array(1,2,3,4,5,6,7,8,9);
    foreach ($numbers as $number) {
        echo $number."; ";
    }
    echo "<br>";
    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";
    $numbers[4] = "five";

    foreach ($numbers as $value) {
        echo $value."; ";
    }
    echo "<br>";

    // $variable[key] = value
    $luong_nhan_vien = array("hieu" => 2003, "hau" => 2006, "duc" => 2012);
    foreach ($luong_nhan_vien as $key => $value) {
        echo $key.": ".$value."; <br>";
    }

    //$variable[key][key] = value
    $diem_thi = array(
        "hoang" => array(
            "toan" => 5,
            "ly" => 5,
            "hoa" => 8
        ),
        "hieu" => array(
            "toan" => 9.2,
            "ly" => 8,
            "hoa" => 8.75
        ),
        "dien" => array(
            "toan" => 5,
            "ly" => 5,
            "hoa" => 6
        )
    );

    foreach ($diem_thi as $name => $subjects) {
        echo $name.": <br>";
        foreach ($subjects as $subject => $score) {
            echo $subject.": ".$score."; <br>";
        }
    }
?>