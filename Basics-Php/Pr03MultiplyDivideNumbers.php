<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiply or Divide Numbers</title>
</head>
<body>
    <form>
        Number 1: <input type="text" name="num1"><br>
        Number 2: <input type="text" name="num2"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1 = intval($_GET['num1']);
            $num2 = intval($_GET['num2']);
            if ($num1 <= $num2) {
                echo $num1 * $num2;
            } else {
                echo $num1 / $num2;
            }
        }
    ?>
</body>
</html>