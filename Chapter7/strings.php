<?php
/**
 * Created by PhpStorm.
 * User: liam
 * Date: 06/10/15
 * Time: 13:37
 */


//Difference between single and double quotes

//Set a string
$value = 'Pandas';

//Set string with single quotes
$first = 'We love $value \n';

//Set string with double quotes
$second = "We love $value \n";

var_dump($first);
var_dump($second);

//Cleaner way to output with double quotes
$clean = "We love {$value} \n";

var_dump($clean);