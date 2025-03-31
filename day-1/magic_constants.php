<?php
    echo "line current: ". __LINE__;
    echo "<br>";
    echo "file current: ". __FILE__;
    echo "<br>";
    function testFunction()
    {
        echo "function namme current: ". __FUNCTION__;
    }
    testFunction();

    echo "<br>";
    class MyClass {
        public static function myMethod() {
            echo "class name: ".__CLASS__."<br>";
            echo "method: ".__METHOD__."<br>";
        }
    }

    MyClass::myMethod();
?>