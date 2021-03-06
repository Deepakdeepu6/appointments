<?php


$date =  TIME();
//12 hour format with uppercase AM/PM
echo date("g:iA", strtotime($date));
echo date("h:i:sa");

?>