<?php

require __DIR__.'/vendor/autoload.php';

use Dell\Pph21\FirstRuleCalculator;
use Dell\Pph21\SecondRuleCalculator;
use Dell\Pph21\ThirdRuleCalculator;
use Dell\Pph21\FourthRuleCalculator;
use Dell\Pph21\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calculator->calculate(25000000);
echo PHP_EOL;

echo $calculator->calculate(30000000);
echo PHP_EOL;

echo $calculator->calculate(45000000);
echo PHP_EOL;

echo $calculator->calculate(50000000);
echo PHP_EOL;

echo $calculator->calculate(60000000);
echo PHP_EOL;

echo $calculator->calculate(75000000);
echo PHP_EOL;

echo $calculator->calculate(250000000);
echo PHP_EOL;

echo $calculator->calculate(300000000);
echo PHP_EOL;

echo $calculator->calculate(450000000);
echo PHP_EOL;

echo $calculator->calculate(750000000);
echo PHP_EOL;

echo $calculator->calculate(1000000000);