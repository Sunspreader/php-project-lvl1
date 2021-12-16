<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function playProgression()
{
    $question = 'Find the greatest common divisor of given numbers.';
    engine($question, function () {

        $randomLenght = rand(5, 10);
        $randomStep = rand(2, 5);
        $randomStart = rand(1, 100);
        $randomKey = rand(0, $randomLenght);
        $current = $randomStart;
        $progressionArray = [];

        for ($i = 0; $i <= $randomLenght; $i++) {
            $progressionArray[] = $current;
            $current = $current + $randomStep;
        }

        $arrayWithSecret = $progressionArray;
        $arrayWithSecret[$randomKey] = '..';

        $subject = implode(' ', $arrayWithSecret);
        $correctAnswer = $progressionArray[$randomKey];

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
