<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function prime(int $number)
{
    if ($number == 1) {
        return 'no';
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

function playPrime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    engine($question, function () {

        $randomInt = rand(1, 100);
        $correctAnswer = prime($randomInt);

        $subject = $randomInt;

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
