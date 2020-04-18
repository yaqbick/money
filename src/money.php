<?php

 class Money
{
    protected $currency;
    protected $amount;
    protected $currencies;

    public function __construct(string $currency, float $amount)
    {
        $currencies = ['PLN','GBP','USD'];
        $this->currency = $currency;
        $this->amount = $amount;

        if($amount < 0)
        {
            throw new Exception($amount.' Negative numbers are not allowed'); 
        }
        else if(!in_array($currency,$currencies))
        {
            throw new Exception($amount.' Currency '.$currency.' does not exist. Available currencies: PLN, GBP or USD'); 
        }
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

        $this->amount = $this->amount + $moneyObject->amount;
        return $this;
    }

    public function substract(Money $moneyObject)
    {
        if( $this->amount < $moneyObject->amount ) 
        {
            throw new Exception("Result can't be negative");
        }   
        $this->amount = $this->amount - $moneyObject->amount;
        return  $this;
    }

    public function multiplyBy(float $number)
    {
        $this->amount = $this->amount * $number;
        return  $this;
    }

    public function divideBy(float $number)
    {   if($number==0) 
        {
            throw new Exception("you are not allowed to sum up different currencies");
        }   
        $this->amount = $this->amount / $number;
        return  $this;
    }
}
?>