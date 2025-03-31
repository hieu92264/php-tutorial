<?php
    if($_POST["name"] || $_POST["age"])
    {
        if(preg_match("/^[a-zA-Z]+$/",$_POST["name"])) {
            die("variable name error - should be characters");
        }

        echo "welcome".$_POST["name"]."<br/>";
        echo "your age".$_POST["age"]."<br/>";

        exit();
    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            name: <input type="text" name="name"/>
            age: <input type="text" name="age"/>
            <input type="submit"/>
        </form>
    </body>
</html>
