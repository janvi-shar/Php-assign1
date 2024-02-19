<?php
// Function to truncate article title to 50 characters if it exceeds the limit
function truncateTitle($title) {
    // Check if title length exceeds 50 characters
    if (strlen($title) > 50) {
        // Truncate title to 50 characters
        $title = substr($title, 0, 50);
    }
    // Return truncated or original title
    return $title;
}

// Example usage
$articleTitle = "Your article title here, which might be longer than 50 characters.";
$truncatedTitle = truncateTitle($articleTitle);
echo $truncatedTitle;
?>