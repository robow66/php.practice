<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

echo "Hello Robow<br>";

$answer = 'N';

if ($answer == 'Y' || $answer == 'y') {
    echo "The answer was yes<br>";
} elseif ($answer == 'N' || $answer == 'n') {
    echo "The answer was no<br>";
} else {
    echo "Error: $answer is not valid<br>";
}

switch ($answer) {
    case 'y':
    case 'Y':
        echo "The answer was yes";
        break;

    case 'n':
    case 'N':
        echo "The answer was no";
        break;

    default:
        echo "Error: $answer is not valid";
}

?>
<?php

define("NAME", "Robow");
define("AGE", 22);
define("UNIVERSITY", "Jamhuriya University");

echo "Name: " . NAME . "<br>";
echo "Age: " . AGE . "<br>";
echo "University: " . UNIVERSITY;

?>
</body>
</html>
