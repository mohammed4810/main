<?php

$product = ['
    
        chess' => 5,
        'juice' => 6, 
        'milk' => 4.5
    
    ];
$rule = ['customer_regular','summary'];

echo calcTotal($product, $rule);

function calcTotal($product, $rule = [], $isTax = false) {
  
  
  $total = array_sum($product);

  $total = applayRule($total, $rule);
  
  
  
  if ($isTax) {
    $total *= 1.1;
  }return $total;
  
}

function applayRule($value, $rule = []) {
 
  $rules = getRules();
  
  foreach ($rule as $rul) {
    if (!empty($rules[$rul])) {
      $value *= (1 * $rules[$rul]);
    }
  }return $value;
  
}

function getRules() {
  return [
    'customer_regular' => 0.1,
    'summary' => 0.2,
  ];
}