<?php
class CreditCard
{
    private $name, $number, $exp_month, $exp_year;

    public function __construct($name, $number, $exp_month, $exp_year) {
        $this->name = $name;
        $this->number = $number;
        $this->exp_month = $exp_month;
        $this->exp_year = $exp_year;
    }

    public function verify() {

    }
}
var_dump(CreditCard)
?>
