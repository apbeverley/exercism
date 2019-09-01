<?php

function calculate($calc) :int
{
    $stringOperators = array(
        'plus',
        'multiply',
        'multiplied',
        'minus',
        'divided');

    $operators = array(
        '+',
        '*',
        '*',
        '-',
        '/',
        '+');

    /*
    if (strpos($calc, 'cubed') == true) {
        $calc = cubed($calc);
    }*/

    $calc = str_replace($stringOperators, $operators, $calc);
    
    $calcProcess = preg_replace(
                        array(
                            '/[^\d+=*-\/()]/i',
                            '/--/'
                        ), 
                        array(
                            '',
                            '+'
                        ), $calc);
                        
    if((strlen($calcProcess) > 0) && (!is_numeric($calcProcess))){
        $response = eval('return '.$calcProcess.';');
    } else {
        throw new InvalidArgumentException();
    }

    return $response;    
}

function cubed($calc) :string
{
    $num = (preg_replace('/[^\d-]/i', '', $calc));

    if(is_numeric($num)){
        return "$num * $num * $num";
    } 

    return false;
}