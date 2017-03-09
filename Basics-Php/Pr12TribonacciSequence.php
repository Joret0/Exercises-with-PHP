<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>12.	Tribonacci Sequence</title>
</head>
<body>
    <form>
        Number:<input type="text" name="num" /><br>
        <input type="submit" value="Submit"/>
    </form>
    <?php
        if (isset($_GET['num'])) {
        $num = intval($_GET['num']);
        $nums;
        $nums[] = 1;
        $nums[] = 1;
        $nums[] = 2;
        $num1 = 1;
        $num2 = 1;
        $num3 = 2;
        for ($i = 0; $i < $num - 3; $i++) {
            $num4 = $num1 + $num2 + $num3;
            $nums[] = $num4;
            $num1 = $num2;
            $num2 = $num3;
            $num3 = $num4;
        }
        echo implode(" ", $nums);
    }
    ?>
</body>
</html>