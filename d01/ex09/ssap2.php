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

function getnums($array)
{
    foreach ($array as $item)
    {
        if(is_numeric($item))
            $res[] = $item;
    }
    if($res)
        sort($res);
    return($res);
}

function getstrings($array)
{
    foreach ($array as $item)
    {
        if(ctype_alpha($item[0]))
            $res[] = $item;
    }
    if($res)
        sort($res);
    return($res);
}

function getspecial($array)
{
    foreach ($array as $item)
    {
        if(!is_numeric($item) && !ctype_alpha($item[0]))
            $res[] = $item;
    }
    if($res)
        sort($res);
    return($res);
}

function ft_split($string)
{
    $splited = array_filter(explode(" ", trim($string)), "ft_strlen");
    return $splited;    
}
    $splited = ft_split(del_file_name($argv));
    $nums = getnums($splited);
    $strings = getstrings($splited);
    $special = getspecial($splited);
    putendl($strings);
    putendl($nums);
    putendl($special);
?>