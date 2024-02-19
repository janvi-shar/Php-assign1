<?php
// Define the correct answers for each question
$correct_answers = array(
    'question1' => 'a',
    'question2' => 'b',
    'question3' => 'c',
    // Add more questions and their correct answers as needed
);

// Initialize user's score
$score = 0;

// Check if each question's answer matches the correct answer and increment score if correct
foreach ($_POST as $question => $user_answer) {
    if (isset($correct_answers[$question]) && $user_answer === $correct_answers[$question]) {
        $score++;
    }
}

// Display user's score
echo "Your score is: $score out of " . count($correct_answers);

?>