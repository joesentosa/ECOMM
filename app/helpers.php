<?php

function generateFormatRP($angka){
  return "Rp ".number_format($angka,2,',','.');
}