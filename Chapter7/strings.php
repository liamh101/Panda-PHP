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


//Strings using Concatenation

//First part of a sentence
$ammendFirst = 'Pandas are';

//Second part of a sentence
$ammentSecond = ' awesome';

//Sentenced stitched together
var_dump($ammendFirst . $ammentSecond);

//First part of sentence (string)
$aMaths = 'Value of ';

//Second part of sentence (float)
$aMaths2 = 28.304;

//Stitching both parts of sentence together
var_dump($aMaths . $aMaths2);

