<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>13.	Prime Numbers from N to 1</title>
</head>
<body>
    <form>
        Number:<input type="text" name="num" /><br>
        <input type="submit" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = intval($_GET['num']);
        $prime;
        for ($i = $num; $i >= 3; $i--) {
            $isPrime = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                }
            }
            if ($isPrime) {
                $prime[] = $i;
            }
        }
        echo implode(" ", $prime);
    }
    ?>
</body>
</html>