<?php

echo calcShapeArea('circil', ["5j8"]);


function get_func_argNames($funcName)
{
    $f = new ReflectionFunction($funcName);
    return count($f->getParameters());
}


function calcShapeArea($shape_name, $parms = [])
{
   $r = validation($shape_name,$parms);
   if (is_string($r)) return $r ; 
   
    return  call_user_func_array($shape_name, $parms);

    
}

function validation($shape_name, $parms = [])
{
    foreach ($parms as $element) {
        if (!is_numeric($element)) {
            return "$element most be numerical";
        }


        if (!function_exists($shape_name)) return "the shape not found ";
        if (get_func_argNames($shape_name) != count($parms)) return "check paramert number ";
    }
    return true;
}


function rect($w, $h)
{
    return $w * $h;
}
function circil($r)
{
    return $r * $r * pi();
}
function squar($w)
{
    return $w * $w;
}
