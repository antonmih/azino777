<?php
include 'class_casino.php';
include 'class_balans.php';

$stavka = $_POST['stavka'];
$vibor = $_POST['vibor'];

$stavvka = new casino($stavka);
$balans = new balans();
$rannd = rand(1,30);
$g = $stavvka->stavka;
if ($rannd <= 10)
    {
$stavvka->green();
        $g = $stavvka->stavka;
$balans->plusBalans($g);
        $b = $balans->balans;

    }

    else
{
    $balans->minusBalans($stavka);
    $b = $balans->balans;
}


require 'index.php';

?>

