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
        Email:
        <input type="text" name="email">
        <br>
        Password:
        <input type="text" name="pass">
        <br>
        Confirm Password:
        <input type="text" name="cppassword">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $cppass=$_POST["cppassword"];

    if(empty($name)){
        echo"<script>alert('fields required')</script>";
    }
    if($pass!=$cppass){
        echo"<script>alert('password not matched')</script>";
    }
    if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"<script>alert('invalid format')</script>";
    }
        
}

?>