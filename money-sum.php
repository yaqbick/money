<?php

require(__DIR__.'/vendor/autoload.php');
use Money\Money;
use Money\MoneyToStringFormatter;


unset($argv[0]);
$currency = $argv[1];
unset($argv[1]);
$moneySum = new Money($currency,0);
foreach ($argv as $arg)
{
   $money = new Money($currency, $arg);
   $moneySum->sumUpWith($money);
}
$formatter = new MoneyToStringFormatter();
$output = $formatter->format($moneySum);
echo $output;
