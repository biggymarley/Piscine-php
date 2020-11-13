#!/usr/bin/php
<?php
    $i = 1;
    while($argv[$i])
    {
        echo $argv[$i++];
        echo "\n";
    }
?>