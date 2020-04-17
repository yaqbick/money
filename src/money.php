<?php

 class Money
{
    public string $currency;
    public float $amount;

    public function __construct(string $currency, float $amount )
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function sum_up_with(Money $moneyObject)
    {
        if($this->currency!= $moneyObject->currency) {
            throw new Exception("you are not allowed to sum up different currencies");
        }

        $sum = $this->amount + $moneyObject->amount;
        return $sum;
    }

    public function substract(Money $moneyObject)
    {
        $difference = $this->amount - $moneyObject->amount;
        return $difference;
    }

    public function multiply_by($number)
    {
        $product = $this->amount * $number;
        return $product;
    }

    public function divide_by($number)
    {       
        $quotient = $this->amount / $number;
        return $quotient;
    }
}
?>