<?php
function add($x) {
    if (!$x) {
        throw new Exception('Error');
    }
    return $x+$x;
}


try {
    echo add(5);
} catch (Exception $e) {
    echo "Caught exception: ", $e->getMessage(), "\n";
}
?>