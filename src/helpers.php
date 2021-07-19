<?php

if(!function_exists('upper') ){
    function upper($value)
    {
        return App\Format::upperText($value);
    }
}

if(!function_exists('lower')){
    function lower($value)
    {
        return App\Format::lowerText($value);
    }
    
}
