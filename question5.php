<?php
// Assume $totalOrderAmount is the variable containing the total order amount
$totalOrderAmount = 900; // Example total order amount

// Check if the total order amount qualifies for the discount
if ($totalOrderAmount > 1000) {
    $discountAmount = 100; // Assuming Rs. 100 discount
    echo "Congratulations! You qualify for a Rs. $discountAmount discount on your order.";
} else {
    echo "You need to spend Rs. " . (1000 - $totalOrderAmount) . " more to qualify for the discount.";
}
?>