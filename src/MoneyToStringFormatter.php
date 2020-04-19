<?php

namespace Money;

class MoneyToStringFormatter implements MoneyFormatter
{
    public function format(Money $money): string
    {
        $amount = number_format($money->getAmount(), 2, MoneyFormatter::ODD_SEPARATOR, MoneyFormatter::THOUSAND_SEPARATOR);
        return $amount . ' ' . $money->getCurrency();
    }
}
