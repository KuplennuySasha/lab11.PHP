<?php
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

echo "При x1=$x1,<br>х2=$x2<br>";

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1/$x2;
        break;
    default:
        return 'Операція не підтримується';
}
echo "Результат становить $result";

