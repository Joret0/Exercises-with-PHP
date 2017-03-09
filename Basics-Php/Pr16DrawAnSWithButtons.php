<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>16.	Draw an S with Buttons</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                if ($i == 1 || $i == 9 || $i == 5 || ($j == 1 && $i >= 1 && $i <= 5) || ($j == 5 && $i >= 5 && $i <= 9))
                { ?>
                    <button style="background-color: blue">1</button>
                <?php } else {?>
                    <button>0</button>
                <?php }
            }?>
        <br>
    <?php
        }
    ?>
</body>
</html>