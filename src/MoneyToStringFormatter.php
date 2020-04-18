<?php
// require_once(__DIR__.'/Money.php');
// require_once(__DIR__.'/MoneyFormatter.php');
namespace money;

class MoneyToStringFormatter extends Formatter implements MoneyFormatter
{
    public function format(Money $money)
    {
        $formattedCurrency = strval($money->getCurrency());
        $amount = number_format($money->getAmount(), 2, ',', ' ');
        $formattedAmount = strval($amount);
        $output =$formattedCurrency.' '.$formattedAmount;
        return $output;
    }
}
?>