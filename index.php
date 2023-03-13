<?php

renderLaptop();


function renderLaptop () 
{
    $data = getlaptop();
    echo "brand =  ". $data['brand'].
    "<p>cpu =". $data['cpu'].
    "<p>ram =". $data['ram'].
    "<p>gpu =". $data['gpu'];
    

 
    
} 


function getlaptop()
{
    $laptop = rand (0,2);
    switch ($laptop) 
    { 
        case 0 : 
            return Lap1 ();
            break;

        case 1 : 
            return Lap2 ();
            break;

        case 2 : 
            return Lap3 ();
            break;



    
    }
}

function Lap1 ()
{
    return [
        'brand'=>'hp',
        'cpu'=>'core i7 2.3 Gh',
        'ram'=>'16 G',
        'gpu'=>'MSI 3070',

    ]; 

}
function Lap2 ()
{
    return [
        'brand'=>'Acer',
        'cpu'=>'core i5 2.4 Gh',
        'ram'=>'16 G',
        'gpu'=>'palat 1016',

    ];

}
function Lap3 ()
{
    return [
        'brand'=>'Dell',
        'cpu'=>'core i9 4.3 Gh',
        'ram'=>'32 G',
        'gpu'=>'MSI 3090',

    ];

}