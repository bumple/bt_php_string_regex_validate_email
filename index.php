<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Email: <input type="text" name="mail">
    <input type="submit" name="btn" value="Xác Nhận">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $mail = $_REQUEST['mail'];
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern,$mail)){
        echo "Mail $mail hợp lệ ";
    }else{
        echo "Mail $mail không hợp lệ ";
    }
}
?>
</body>
</html>
