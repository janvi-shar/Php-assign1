<?php
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return 'Beginner';
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return 'Intermediate';
    } elseif ($steps > 10000) {
        return 'Advanced';
    }
}

// Example usage:
$stepsWalked = 11000; // You can change this value to simulate different scenarios
$fitnessLevel = determineFitnessLevel($stepsWalked);
echo "Fitness level: " . $fitnessLevel;
?>