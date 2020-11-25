<?php
function geefTienprocent(){
    $koopPrijs = 75;
    $korting = 10;
    return $koopPrijs - ($korting/10);
}
geefTienprocent()
?>