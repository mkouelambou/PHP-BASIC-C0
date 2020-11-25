<?php
function geefTienprocent(){
    $koopPrijs = 75;
    $korting = 10;
    $eindPrijs = ($koopPrijs / 100) * $korting;
    $totaal = $koopPrijs - $eindPrijs;
    return number_format ($totaal ,2);
}
echo geefTienprocent();
?>