<?php

function daysTillNewYear()
{
    $today = date('z');
    $leapYear = date('L');
    if ($leapYear == 1)
    {
        $daysBeforeNY = 366 - $today;
    }
    else
    {
        $daysBeforeNY = 365 - $today;
    }
    return $daysBeforeNY;
}

echo daysTillNewYear();