<?php

include_once __DIR__ . '/user.php';

class Product
{
    protected $nameProduct;
    protected $price;
    protected $discount = 0;

    public function __construct(string $nameProduct, string $price,  $discount){
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->discount = $discount;
    }

    /**
     * Get the value of nameProduct
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * Set the value of nameProduct
     *
     * @return  self
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

class DogFood extends Product
{
    protected string $food = 'dog food';
    protected string $nameProduct = 'ringo';


    /**
     * Get the value of food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set the value of food
     *
     * @return  self
     */
    public function setFood($food)
    {
        $this->food = $food;

        return $this;
    }

    /**
     * Get the value of nameProduct
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * Set the value of nameProduct
     *
     * @return  self
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }
}
//  non capisco questo errore da rivederte (Product)

$obj = new Product('Ringo star', '€ 55,50' , '0') ;
$objAssociato = new DogFood();
var_dump($obj);

?>
