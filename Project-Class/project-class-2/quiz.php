<?php


$questions = [
    ['question' => 'what is 2+2', 'corect' => "4"],
    ['question' => 'what is 5-2', 'corect' => "3"],
    ['question' => 'what is 10+2', 'corect' => "12"],
];


$answers = [];


foreach ($questions as $key => $question) {
    echo ($key) . "." . $question['question'] . "\n";
    $answers[] = trim(readline("Your Answer : "));
}


function evalualeQuiz(array $questions, array $answers): int
{

    $score = 0;
    foreach ($questions as $key => $question) {
        if ($answers[$key] === $question['corect']) {
            $score += 1;
        }
    }

    return $score;
}


$result = evalualeQuiz($questions, $answers);


echo "You score $result out of ", $result . "\n";


if ($result === count($questions)) {
    echo "Excelient Job : \n";
} elseif ($result >= 1) {
   echo "Good effort \n";
} else {
    echo "try again";
}
