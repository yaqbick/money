<?php

namespace Money;

interface MoneyFormatter
{
    public const THOUSAND_SEPARATOR = ' ';
    public const ODD_SEPARATOR = ',';

    public function format(Money $money): string;
}
