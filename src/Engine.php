<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function engine($question, $callback)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, " . $name . "!");
    line($question);

    $roundCounter = 0;
    while ($roundCounter < 3) {
        $roundCounter++;
        $localPack = call_user_func($callback);
        line('Question: ' . $localPack['subject']);
        $answer = prompt('Your answer');
        if ($answer == $localPack['correctAnswer']) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$localPack['correctAnswer']}'");
            line("Let's try again, {$name}!");
            $roundCounter--;
            break;
        }
    }
    if ($roundCounter >= 3) {
        line("Congratulations, {$name}!");
    }
}
