#!/usr/bin/php
<?php
function if_odd_even($string)
{
    $i = 0;
    while ($string[$i])
        $i++;
    $i--;
    if ($string[$i] % 2 == 0)
        return(true);
    else
        return(false);
}
    while(1)
    {
        echo "Enter a number: ";
        if(($buff = fgets(STDIN)) == NULL)
        {
            echo "\n";
            break;
        }
        $num = trim($buff);
        if(is_numeric($num))
        {
            if (if_odd_even(($num)))
            echo "The number $num is even\n";
            else
            echo "The number $num is odd\n"; 
        } 
        else
            echo "'$num' is not a number\n"; 
    }
?>