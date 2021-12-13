<?php

function generateFormatRP($angka){
  return "Rp ".number_format($angka,2,',','.');
}

function quickRandom($length = 16)
{
    $pool = '0123456789';
    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}
