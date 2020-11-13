#!/usr/bin/php
<?php


function trad($string)
{
    if ($string == 'Novembre' || $string == 'novembre')
        return ('November');
    else if ($string == 'Janvier' || $string == 'janvier')
        return ('January');
    else if ($string == 'Fevrier' || $string == 'fevrier')
        return ('February');
    elseif ($string == 'Mars' || $string == 'mars')
        return ('March');
    elseif ($string == 'Avril' || $string == 'avril')
        return ('April');
    else if ($string == 'Mai' || $string == 'mai')
        return ('May');
    else  if ($string == 'Juin' || $string == 'juin')
        return ('June');
    else if ($string == 'Juillet' || $string == 'juillet')
        return ('July');
    elseif ($string == 'Aout' || $string == 'aout')
        return ('August');
    else if ($string == 'Septembre' || $string == 'septembre')
        return ('September');
    elseif ($string == 'Octobre' || $string == 'octobre')
        return ('October');
    elseif ($string == 'Decembre' || $string == 'decembre')
        return ('December');
    else
        echo "Wrong Format\n";
}
function checker($array)
{
    $i = 0;
    if ($array[0])
        preg_match('/[a-zA-Z]+/', $array[0], $day);
    if ($day[0] != $array[0] || !$day[0])
        return (-1);
    if ($array[1])
        preg_match('/[0-9]{2}/', $array[1], $dnum);
    if ($dnum[0] != $array[1] || !$dnum[0])
        return (-1);
    if ($array[2])
        preg_match('/[a-zA-Z]+/', $array[2], $month);
    if ($month[0] != $array[2] || !$month[0])
        return (-1);
    if ($array[3])
        preg_match('/[0-9]{4}/', $array[3], $year);
    if ($year[0] != $array[3] || !$year[0])
        return (-1);
    if ($array[4]) {
        $sr = preg_split('/:/', $array[4]);
        $all = array();
        while ($sr[$i]) {
            preg_match('/[0-9]{2}/', $sr[$i], $hms);
            if ($sr[$i] != $hms[0])
                return (-1);
            $all[] .= $hms[0];
            $i++;
        }
        $h = $all[0];
        $m = $all[1];
        $s = $all[2];
        if (!$h || !$m || !$s)
            return (-1);
    }
    $month[0] = trad($month[0]);
    $str = $dnum[0] . " " . $month[0] . " " . $year[0] . " " . $h . " hours " . $m . " minutes " . $s . " seconds";
    echo strtotime($str);
    return (0);
}


$pat = '/\\s+/';
$array = preg_split($pat, $argv[1]);
if (checker($array) == -1)
    echo "Wrong Format\n";

?>