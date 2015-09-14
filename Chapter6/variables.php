<?php
/**
 * Created by PhpStorm.
 * User: liam
 * Date: 14/09/15
 * Time: 17:07
 */

$three = 3;
$five = 5;

echo $three + $five ."\n";

$pi = 3.14159265359;

echo $pi * 5 ."\n";

echo $pi * 12 ."\n";

$panda = 3;

$panda += 1;

var_dump($panda);

$panda--;

var_dump($panda);

// Staging

echo "Staging Before\n";

$stage1 = 3;

var_dump($stage1);

var_dump(--$stage1);

var_dump($stage1);

echo "Staging After\n";

$stage2 = 3;

var_dump($stage2);

var_dump($stage2--);

var_dump($stage2);