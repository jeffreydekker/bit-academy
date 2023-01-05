<?php

function countDown($num)
{
    if ($num >= 0 && $num <= 10) {
        echo "Correct number!";
    } else {
        throw new Exception();
    }
}

try {
    countDown(65);
} catch (Exception $e) {
    error_log("Did not put a number 0-10", 0);
}
?>