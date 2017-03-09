<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>15. Sub-Lists</title>
</head>
<body>
    <form>
        Number 1:<input type="text" name="num1" /><br>
        Number 2:<input type="text" name="num2" /><br>
        <input type="submit" value="Submit" />
    </form>
    <ul>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = intval($_GET['num1']);
                $num2 = intval($_GET['num2']);
                for ($i = 1; $i <= $num1; $i++) {
        ?>
                <li>List <?= $i ?>
                    <ul>
                        <?php for ($j = 1; $j <= $num2; $j++) { ?>
                            <li>
                                Element <?= $i ?>.<?= $j ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
        <?php
                }
            }
        ?>
    </ul>
</body>
</html>