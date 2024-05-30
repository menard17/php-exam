<?php
//  How to concat string ? write example code
$date = new DateTime('2015-01-15');

$date->modify('+30 days');

echo $date->format('Y-m-d');

?>