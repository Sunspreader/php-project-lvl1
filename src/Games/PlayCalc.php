<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function playCalc()
{
    $question = 'What is the result of the expression?';

    engine($question, function () {

        $randomOne = rand(0, 15);
        $randomTwo = rand(0, 15);
        $randomMarkKey = rand(0, 2);
        $correctAnswerStr = '';
        $correctAnswerInt = 0;

        if ($randomMarkKey === 0) {
            $correctAnswerStr = "{$randomOne} + {$randomTwo}";
            $correctAnswerInt = $randomOne + $randomTwo;
        } elseif ($randomMarkKey === 1) {
            $correctAnswerStr = "{$randomOne} - {$randomTwo}";
            $correctAnswerInt = $randomOne - $randomTwo;
        } elseif ($randomMarkKey === 2) {
            $correctAnswerStr = "{$randomOne} * {$randomTwo}";
            $correctAnswerInt = $randomOne * $randomTwo;
        }

        $subject = $correctAnswerStr;
        $correctAnswer = $correctAnswerInt;

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
