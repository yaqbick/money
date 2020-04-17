<?php
require_once(__DIR__.'/money.php');

interface MoneyFormatter
{
    public function moneyToString(Money $money);
}

class Formatter implements MoneyFormatter
{
    public function moneyToString(Money $money)
    {
        $formattedCurrency = strval($money->getCurrency());
        $amount = number_format($money->getAmount(), 2, ',', ' ');
        $formattedAmount = strval($amount);
        $output =$formattedCurrency.' '.$formattedAmount;
        return $output;
    }
}
?>