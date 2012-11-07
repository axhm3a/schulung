<?php
/**
 * Created by JetBrains PhpStorm.
 * User: axhm3a
 * Date: 07.11.12
 * Time: 18:21
 * To change this template use File | Settings | File Templates.
 */

/*
    $a = 0xF0;
    $b = 0x0F;

    $val1 = $a & $b; // bitwise AND
    $val2 = $a | $b; // bitwise OR
    $val3 = $a ^ ($b | $a); // bitwise XOR

    echo sprintf('0x%02X - 0x%02X - 0x%02X', $val1, $val2, $val3);
*/

/*

    $arr1 = array(
        'a' => 'Apple',
        'b' => 'Banana'
    );

    $arr2 = array(
        'b' => 'Banana',
        'a' => 'Australia',
        'Apple'
    );

    $arr3 = array_diff($arr1, $arr2);
    $arr4 = array_diff($arr2, $arr1);

    $keys = array_keys($arr4);

    echo count($arr3) . ' - ' . $keys[0];

*/

//echo strlen(0);
/*
$a = 0.5;
$b = 0.1;
$c = 16;

echo sprintf('%01.2lf %.1lf 0x%x', $a, $b, $c);
*/
/*
$number1 = 250;
$number2 = 7;

$format = '%03d';

echo sprintf($format, $number1);
echo sprintf($format, $number2);
*/
/*
$myArray = array(
    'foo' => 'bar',
    7 => 15,
    28
);

$myArray[] = 25;

var_dump($myArray);

*/

$str = printf('%.1f', 5.3);

echo trim('PHP ' . $str);

var_dump($str);