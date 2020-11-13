#!/usr/bin/php
<?php
function ft_strlen($string)
{
    $i = 0;
    while ($string[$i++])

    return ($i);
}

function putendl($array)
{
    $i = 0;
    while($array[$i])
    {
        echo $array[$i++], "\n";
    }
}

function del_file_name($argv)
{
    unset($argv[0]);
    $string = implode(" ", $argv);
    return($string);
}

function ft_split($string)
{
    $splited = array_filter(explode(" ", trim($string)), "ft_strlen");
    sort($splited);
    return $splited;
}
    putendl(ft_split(del_file_name($argv)));
?>