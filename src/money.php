<?php

 class Money
{
    protected $currency;
    protected $amount;

    public function __construct(string $currency, float $amount )
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    function getCurrency()
    {
        return $this->currency;
    }

    function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    function getAmount()
    {
        return $this->amount;
    }

    function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function sumUpWith(Money $moneyObject)
    {
        if($this->currency!= $moneyObject->currency) {
            throw new Exception("you are not allowed to sum up different currencies");
        }

        $sum = $this->amount + $moneyObject->amount;
        return  $sum;
    }

    public function substract(Money $moneyObject)
    {
        if( $this->amount < $moneyObject->amount ) 
        {
            throw new Exception("Result can't be negative");
        }   
        $difference = $this->amount - $moneyObject->amount;
        return  $difference;
    }

    public function multiplyBy(float $number)
    {
        $product = $this->amount * $number;
        return  $product;
    }

    public function divideBy(float $number)
    {   if($number==0) 
        {
            throw new Exception("you are not allowed to sum up different currencies");
        }   
        $quotient = $this->amount / $number;
        return  $quotient;
    }
}
?>