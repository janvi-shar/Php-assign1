<?php
$trafficLightColor = "Yellow";

if ($trafficLightColor === "Green") {
    echo "Green - Go";
} elseif ($trafficLightColor === "Yellow") {
    echo "Yellow - Slow down";
} elseif ($trafficLightColor === "Red") {
    echo "Red - Stop";
} else {
    echo "Invalid traffic light color";
}
?>