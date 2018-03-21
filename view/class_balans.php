<?php

class balans
{
public $balans;


    public function plusBalans($stavka)
    {
        $this->balans += $stavka;
    }

    public function minusBalans($stavka)
    {
        $this->balans-=$stavka;
    }

    public function getBalans()
    {
        return $this->balans;
    }

}
?>