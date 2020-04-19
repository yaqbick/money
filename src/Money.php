<?php

namespace Money;

use Exception;
use InvalidArgumentException;

class Money
{
    protected $currency;
    protected $amount;
    protected $currencies;

    public function __construct(string $currency, float $amount)
    {
        $currencies = ['PLN', 'GBP', 'USD'];

        if ($amount < 0) {
            throw new Exception($amount . ' Negative numbers are not allowed');
        }
        if (!in_array($currency, $currencies)) {
            throw new Exception($amount . ' Currency ' . $currency . ' does not exist. Available currencies: PLN, GBP or USD');
        }
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function sumUpWith(Money $moneyObject): Money
    {
        if ($this->currency !== $moneyObject->getCurrency()) {
            throw new Exception("you are not allowed to sum up different currencies");
        }

        $this->amount = $this->amount + $moneyObject->getAmount();
        return $this;
    }

    public function substract(Money $moneyObject): Money
    {
        if ($this->amount < $moneyObject->getAmount()) {
            throw new Exception("Result can't be negative");
        }
        $this->amount = $this->amount - $moneyObject->getAmount();
        return $this;
    }

    public function multiplyBy(float $number): Money
    {
        if (0 > $number) {
            throw new InvalidArgumentException('');
        }

        $this->amount = $this->amount * $number;
        return $this;
    }

    public function divideBy(float $number)
    {
        if (0 > $number) {
            throw new Exception("you are not allowed to sum up different currencies");
        }
        $this->amount = $this->amount / $number;
        return $this;
    }
}
