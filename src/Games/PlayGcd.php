<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function playGcd()
{
    $question = 'Find the greatest common divisor of given numbers.';
    engine($question, function () {

        $randomOne = rand(1, 100);
        $randomTwo = rand(1, 100);

        $gcd = gmp_gcd($randomOne, $randomTwo);

        $subject = "{$randomOne} {$randomTwo}";
        $correctAnswer = $gcd;

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
