#!/usr/bin/php
<?php
    $trim = trim($argv[1]);
    if($trim)
    {
        $i = 0;
        $balance = 0;
        while($trim[$i])
        {
            if ($trim[$i] != ' ')
            {
                echo $trim[$i];
                $balance = 1;
            }
            elseif($balance == 1)
            {
                echo $trim[$i];
                $balance = 0;
            }
            $i++;
        }
    }
?>