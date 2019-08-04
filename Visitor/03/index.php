<?php

include "visitable.php";

include "product.php";
include "cart.php";

include "visitor.php";
include "visitant.php";

$cart = new Cart("컵라면", 900, 2);
//echo $cart->list();
echo $cart->accept(new Visitant);
