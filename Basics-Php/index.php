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
<form>
    N: <input type="text" name="num">
    <input type="submit">
</form>
<?php
    if (isset($_GET['num'])) {
        $n = intval($_GET['num']);
        echo $n * 2;
    }
?>
</body>
</html>