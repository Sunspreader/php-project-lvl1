<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function gcd($one, $two)
{
    $a = $one;
    $b = $two;
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a + $b;
}


function playGcd()
{
    $question = 'Find the greatest common divisor of given numbers.';
    engine($question, function () {

        $randomOne = rand(1, 100);
        $randomTwo = rand(1, 100);
        $gcd = gcd($randomOne, $randomTwo);

        $subject = "{$randomOne} {$randomTwo}";
        $correctAnswer = $gcd;

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
