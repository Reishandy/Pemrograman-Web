<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Tugas 5</title>
</head>
<body>

<?php

// Identity
echo "Name: Muhammad Akbar Reishandy <br>";
echo "NIM: 22157201033 <br>";
echo "CLass: ILKOM B 2022 <br>";

// Variable setup
$num1 = 23; $num2 = 18;
$str1 = "Hello"; $str2 = "World";
$width = 2; $height = 3; $length = 7; // For beam volume calculation / balok

// Arithmetic
echo "<br> ARITHMETIC OPERATOR <br>";
echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";

// Comparison (with ternary)
echo "<br> COMPARISON OPERATOR <br>";
echo "$str1 == $str2 = " . ($num1 == $num2 ? "true" : "false") . "<br>";
echo "$str1 != $str2 = " . ($num1 != $num2 ? "true" : "false") . "<br>";
echo "$num1 > $num2 = " . ($num1 > $num2 ? "true" : "false") . "<br>";
echo "$num1 < $num2 = " . ($num1 < $num2 ? "true" : "false") . "<br>";
echo "$num1 >= $num2 = " . ($num1 >= $num2 ? "true" : "false") . "<br>";
echo "$num1 <= $num2 = " . ($num1 <= $num2 ? "true" : "false") . "<br>";

// String
echo "<br> STRING OPERATOR <br>";
$concat = $str1 . " " . $str2;
echo "$concat <br>";

$helloWorld = $str1 . ", " . $str2 . "!";
echo "$helloWorld <br>";

// Logical (also with ternary)
echo "<br> LOGICAL OPERATOR <br>";
$result1 = ($num1 > $num2) && ($num1 != $num2);
echo "($num1 > $num2) && ($num1 != $num2) = " . ($result1 ? "true" : "false") . "<br>";

$result2 = ($str1 == $str2) || ($str1 != $str2);
echo "($str1 == $str2) || ($str1 != $str2) = " . ($result2 ? "true" : "false") . "<br>";

$result3 = !($num1 > $num2);
echo "!($num1 > $num2) = " . ($result3 ? "true" : "false") . "<br>";

// Calculate beam / balok volume (in cm just because)
echo "<br> BEAM VOLUME CALCULATION <br>";
$volume = $width * $height * $length;
echo "w = $width cm; h = $height cm; l = $length cm <br>";
echo "Volume = $volume cm<br>";

?>

</body>
</html>