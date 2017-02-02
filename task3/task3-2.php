<?php


$a = 'radar';

function palindrom ($text)
{
    $str = strrev($text);

    if ($text == $str)
    {
        return true;
    }
    else
    {
        return false;
    }
}

echo palindrom($text);