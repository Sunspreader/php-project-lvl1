<?php

namespace Brain\Games\Engine;

use function Brain\Games\Engine\engine;

function playEven()
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';

    engine($question, function () {

        $subject = rand(1, 100);

        $correctAnswer = ($subject % 2 === 0) ? 'yes' : 'no';

        return [
            'subject' => $subject,
            'correctAnswer' => $correctAnswer
        ];
    });
}
