<?php


if ($argc !== 4) {
    echo "Usage: php file.php number_one operator number_two\n";
    exit;
}
$number1 = $argv[1];
$operator = $argv[2];
$number2 = $argv[3];

if (!is_numeric($number1) || !is_numeric($number2)) {
    echo "Error: Both values must be numbers.\n";
    exit;
}

switch ($operator) {

    case '+':
        $result = $number1 + $number2;
        break;

    case '-':
        $result = $number1 - $number2;
        break;

    case '*':
        $result = $number1 * $number2;
        break;

    case '/':
        if ((float)$number2 == 0.0) {
            echo "Error: Division by zero is not allowed.\n";
            exit;
        }

        $result = $number1 / $number2;
        break;

    default:
        echo "Error: Invalid operator. Use +, -, * or /.\n";
        exit;
}

echo "$number1 $operator $number2 = $result\n";

$date = date("Y-m-d");

$calculation = "$number1 $operator $number2 = $result date = $date" . PHP_EOL;

file_put_contents(__DIR__ . "/php.txt", $calculation, FILE_APPEND);

echo "Calculation saved to php.txt\n";

?>