#!/usr/bin/php
<?php

function ft_calcule($num1, $num2, $op)
{
    if (trim($op) == "+")
        return(trim($num1) + trim($num2));
    else if (trim($op) == "-")
    return(trim($num1) - trim($num2));
    else if (trim($op) == "*")
    return(trim($num1) * trim($num2));
    else if (trim($op) == "/")
    return(trim($num1) / trim($num2));
    else if (trim($op) == "%")
    return(trim($num1) % trim($num2));
}

function check_syntax($string)
{
    $i = 0;
    $string = trim($string);
    $balance = 0;
    while($string[$i])
    {
        if ($balance == 0 && ($string[$i] == '/' || $string[$i] == '+' || $string[$i] == '-' || $string[$i] == '*' || $string[$i] == '%'))
        {
            $balance = 1;
            $i++;
        }
        if(!is_numeric($string[$i])  && ($string[$i] != ' ' || (($string[$i] == '/' || $string[$i] == '+' || $string[$i] == '-' || $string[$i] == '*' || $string[$i] == '%') && $balance != 0)))
        {
            echo "Syntax Error\n";
            return(0);
        }
        $i++;
    }
    return(1);
}

function calcule($string)
{
    $i = 0;
    $num1 = '';
    $num2 = '';
    $op = '';
    $res = 0;
    $b = 0;
    $c = 0;
    while($string[$i])
    {
        if (is_numeric($string[$i]) && $b == 1 && (!$op || $num2))
        {
            echo "Syntax Error\n";
            return(0);
        }
        if (is_numeric($string[$i]) && $c != 4)
            $num1 = $num1 . $string[$i];
        else if (is_numeric($string[$i]) && $c == 4)
            $num2 = $num2 . $string[$i];
        else if($string[$i] == ' ' && $b == 0)
        {
            if($op && !$num2)
                $b = 0;
            else
                $b = 1;
        }
        else if(!is_numeric($string[$i]) && !$num1)
        {
            echo "Syntax Error\n";
            return(0);
        }
        else if(!is_numeric($string[$i]) && $num1)
        {
                $c = 4;
                $b = 0;
            $op = $string[$i];
        }
        $i++;
    }
    echo ft_calcule($num1, $num2, $op);
}


if($argc == 2)
{
    if(check_syntax($argv[1]) == 1)
    {
        calcule(trim($argv[1]));
    }
    else
        exit;
}
else
    echo "Incorrect Parameter\n";
?>