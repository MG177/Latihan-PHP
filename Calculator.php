<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="opt">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Devide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>Answer: </p>
<?php

    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $opt = $_GET['opt'];
        switch($opt){
            case "None":
                echo "Please select the operator";
                break;
            case "Add":
                echo $result1+$result2;
                break;
            case "Substract":
                echo $result1-$result2;
                break;
            case "Multiply":
                echo $result1*$result2;
                break;
            case "Devide":
                echo $result1/$result2;
                break;
        }
    }

?>
</body>
</html>