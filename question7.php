<?php

function recommend($temperature) {
    if ($temperature > 25) {
        echo "It's a sunny day!";
    } else {
        echo "Consider taking an umbrella.";
    }
}

$current_temperature = 22; // Example: current temperature in Celsius

recommend($current_temperature);

?>