<?php
class Product{
    Public string $name;
    Public float $price;
   Public  float $vat;





   public function getpricewithvat()
   {
       return $this->price+ ($this->price*$this->vat)/100;
   }
}

