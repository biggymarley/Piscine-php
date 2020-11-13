#!/usr/bin/php
<?php
function ft_calcule($array)
{
    if (trim($array[2]) == "+")
        return(trim($array[1]) + trim($array[3]));
    else if (trim($array[2]) == "-")
    return(trim($array[1]) - trim($array[3]));
    else if (trim($array[2]) == "*")
    return(trim($array[1]) * trim($array[3]));
    else if (trim($array[2]) == "/")
    return(trim($array[1]) / trim($array[3]));
    else if (trim($array[2]) == "%")
    return(trim($array[1]) % trim($array[3]));
}

if ($argc == 4)
{
    $res = ft_calcule($argv);
    echo $res , "\n";
}
else 
    echo "Incorrect Parameters\n";
?>