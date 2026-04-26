<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Name:
    <input type="text" name="name">
    <br>
    Age:
    <input type="number" name="age" id="">
    <br>
    Gender:
    <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="other">other</option>
    </select>
    <br>
    <button type="submit">submit</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];

    echo"Hello,$name.You are $age years old and identify as $gender.";
}
?>