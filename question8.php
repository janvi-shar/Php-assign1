<?php

function assignGrade($score) {
    if ($score >= 90) {
        return "Grade A";
    } elseif ($score >= 80) {
        return "Grade B";
    } elseif ($score >= 70) {
        return "Grade C";
    } elseif ($score >= 60) {
        return "Grade D";
    } else {
        return "Grade F";
    }
}

// Example usage
$score = 59; // You can replace this with the actual score obtained by the student
echo "Score: $score, Grade: " . assignGrade($score);

?>