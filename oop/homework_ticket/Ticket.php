<?php

class Ticket
{
    public int $quantity;
    public float $unit_price;
    public float $totalPrice;

    public function getTotal()
    {
       return $this->totalPrice = $this->quantity * $this->unit_price;
    }
}

?>
