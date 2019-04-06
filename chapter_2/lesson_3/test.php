
<?php

$price_humb = 5;
$price_milkshake = 2;
$price_cola = 1;
$tax_rate = 0.1;
$tip_rate = 1.15; // 15% tip

$number_humb = $_POST["hamburger"];
$number_milkshake = $_POST["choc_milkshake"];
$number_cola = $_POST["cola"];
$check_tip = $_POST["tip"];

  
  $total_price_humb = $number_humb * $price_humb ;
  
  $total_price_milkshake = $number_milkshake * $price_milkshake;
  
  $total_price_cola = $number_cola * $price_cola;
  
  $total_price = $total_price_humb + $total_price_milkshake + $total_price_cola;
  
  
  if(isset($check_tip)){
    $total_price = $total_price * $tip_rate;
  }

  $total_price = $total_price * (1 + $tax_rate);

  if($number_humb) {
    printf("%'_-10s%'_-10s%'_-10s%'_-10s <br>","Name", "Quantity", "Price($)", "Total cost($)" ); // right-justification with spaces
    
    printf('%\'_-14s%\'_-6d%\'_-10.2f$%\'_-6.2f$ <br>',"hamburger", $number_humb, $price_humb, $total_price_humb);
    print ("<br>");
  }

  printf('Total price with tax is $%.2f', $total_price);


?>
