<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>14. HTML Buttons</title>
</head>
<body>
    <form>
        Number:<input type="text" name="num" /><br>
        <input type="submit" value="Submit"/>
    </form>
    <?php
        if (isset($_GET['num'])) {
            $num = intval($_GET['num']);
            for ($i = 1; $i <= $num; $i++) {
    ?>
            <button><?=$i?></button>
    <?php
            }
        }
    ?>
</body>
</html>