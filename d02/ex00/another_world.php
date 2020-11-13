#!/usr/bin/php
<?php
        $pat = '/\\s+/'; 
        $res =  preg_replace($pat, " ", $argv[1]);
        if($res) 
                echo $res ,"\n";
?>