<?php

$product = [
    'chess' => 5,
    'juice' => 6,
    'milk' => 4.5,

];

$rule = ['discount', 'summer'];

echo calcTotal($product, $rule);

function calcTotal($product, $rule = [], $isTax = true)
{
    $total = array_sum($product);

    $total = getRules($total, $rule);

    $total = ($isTax)? $total = $total * 0.05 + $total : $total ; 

    return $total ;
}

function applayRule($value, $rule = [])
{
    
}


function getRules($total, $rule)
{

    foreach ($rule as $key => $value) {
       $total = call_user_func($value . 'Rule', $total);
    }

    return $total;
}

function discountRule($total)
{
    return $total - ($total * 0.2);
}

function summerRule($total)
{

    return $total - ($total * 0.10);
}
