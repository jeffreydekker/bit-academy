<?php

function countDown($num)
{
    if ($num >= 0 && $num <= 10) {
        echo "Correct number!";
    } else {
        throw new Exception("Er is iets fout gegaan...");
    }
}

try {
    countDown(2);
} catch (Exception $e) {
    echo "Er is iets fout gegaan...";
}
?>