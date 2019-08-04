<?php

include "product.php";
include "cart.php";

$cart = new Cart("컵라면", 900, 2);
echo $cart->list();
