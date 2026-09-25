<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 8;
$num2 = 12;

$lcm = 1;

for ($i = 1; $i <= $num1 * $num2; $i++) {

    if ($i % $num1 == 0 && $i % $num2 == 0) {
        $lcm = $i;
        break;
    }

}

echo "LCM = " . $lcm;

?>
</body>
</html>