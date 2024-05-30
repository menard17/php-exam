<?php
//  How to concat string ? write example code
$date1 = new DateTime('2015-01-15');
$date2 = new DateTime('2015-02-14');

if ($date1 < $date2) {
    echo "Date 1 is earlier than Date2. \n";
} elseif ($date1 > $date2) {
    echo "Date 1 is later than Date2. \n";
} else {
    echo "Both dates are equal. \n";
}
?>