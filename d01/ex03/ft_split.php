#!/usr/bin/php
<?php
function ft_strlen($string)
{
    $i = 0;
    while ($string[$i++])

        return ($i);
}

function ft_split($string)
{
    $splited = array_filter(explode(" ", trim($string)), "ft_strlen");
    sort($splited);
    return $splited;
}
?>