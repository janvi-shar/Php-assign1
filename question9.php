<?php

function display_message($account_type) {
    if ($account_type === "basic") {
        echo "Welcome Premium User!";
    } else {
        echo "Welcome Basic User!";
    }
}

$user_account_type = "premium"; // Example: user's account type

display_message($user_account_type);

?>