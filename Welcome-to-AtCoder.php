<?php

$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$line3 = trim(fgets(STDIN));

$num1 = $line1;
[$num2, $num3] = explode(' ', $line2);

$sum = (int)$num1 + (int)$num2 + (int)$num3;
print_r($sum. ' '. $line3);