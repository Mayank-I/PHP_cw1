<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Email:
        <input type="email" name="email" id="">
        <br>
        Password:
        <input type="password" name="pass" id="">
        <br>
        Are you subscribed?:
        <input type="checkbox" name="subscribe" id="" value="yes">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="GET"){
    $email=$_GET["email"];
    $pass=$_GET["pass"];
    $subscribe=isset($_GET["subscribe"  ])?"subscribed":"not subscribed"; 

    echo"Thank you for signing up,$email.You have $subscribe to the newsletter.";
}
?>