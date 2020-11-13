#!/usr/bin/php
<?php
function ft_is_sort($array)
{
    if($array)
    {
    foreach($array as $item)
    $sorted = $array;
    sort($sorted);
    $i = 0;
        {
            if($item != $sorted[$i])
            return(false);
            $i++;
        }
        return(true);
    }
}
?>