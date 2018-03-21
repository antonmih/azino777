<?php
class casino
{
    public $stavka;
    public function __construct($stavka)
    {
        $this->stavka=$stavka;
    }
    public function green()
    {
        $this->stavka*=2.5;
        return $this->stavka;
    }
}
?>