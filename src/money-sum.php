<?php
// namespace money;
// require(__DIR__.'/vendor/autoload.php');

require_once(__DIR__.'/money.php');
require_once(__DIR__.'/moneyFormatter.php');

unset($argv[0]);
if(validate_currency($argv[1]))
{
   $currency = $argv[1];
   unset($argv[1]);
   $moneySum = new Money($currency,0);
   foreach ($argv as $arg)
   {
      if(is_numeric($arg) && $arg > 0)
      {
         $arg = number_format( (float) $arg, 2, '.', '');
         $money = new Money($currency, $arg);
         $moneySum->setAmount($moneySum->sumUpWith($money));
      }
      else
      {
         echo $arg.' is not a positive number';
         break;
      }
   }
   $formatter = new Formatter();
   $output = $formatter->moneyToString($moneySum);
   echo $output;

}
else
{
   echo 'Currency '.$argv[1].' does not exist. Available currencies: PLN, GBP or USD';
}

function validate_currency($currency)
{
   if($currency=='PLN' || $currency=='GBP' || $currency=='USD' )
   {
      return true;
   }
   else
   {
      return false;
   }
}
?>