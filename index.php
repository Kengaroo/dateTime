<?php
$presentTime = new DateTime;
$destinationTime = (new DateTime)->setDate(2022, 11,5);
$destinationTime->setTime(10,0);

$destinationAM = ($destinationTime->format('H') > $destinationTime->format('h') ? 'pm' : 'am'); 
echo $destinationTime->format('M d Y ') . $destinationAM . $destinationTime->format(' h m') . '<br/> DESTINATION TIME<br/><br/>';

$presentAM = ($presentTime->format('H') > $presentTime->format('h') ? 'pm' : 'am');
echo $presentTime->format('M d Y ') . $presentAM . $presentTime->format(' h m') . '<br/> PRESENT TIME<br/><br/>';

echo '<br/>Interval ' . $destinationTime->diff($presentTime)->format('%y years %m months %d days %h hours %m minutes') . '<br/>';
$minutes = (int) $destinationTime->diff($presentTime)->format('%days')*3600;
echo '<br/>Interval in minutes: '. $minutes . '<br/>';
echo '<br/>Petrol ' . ceil($minutes/10000) . ' l';