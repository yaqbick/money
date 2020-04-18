<?php
namespace money;
// require(__DIR__.'/vendor/autoload.php');

// require_once(__DIR__.'/Money.php');
// require_once(__DIR__.'/Formatter.php');
// require_once(__DIR__.'/MoneyToStringFormatter.php');

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
?>