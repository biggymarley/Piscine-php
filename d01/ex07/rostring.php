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
        return $splited;
    }

    function rostring($array)
    {
        $i = 0;
        foreach ($array as $item)
        {
            if ($i != 0)
            echo $item, " ";
            $i++;
        }
        echo $array[0];
    }
    rostring(ft_split($argv[1]));
?>