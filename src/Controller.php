<?php
namespace PHP_Nadkin_IS\GCD\Controller;

use function PHP_Nadkin_IS\GCD\View\showWelcome;
use function PHP_Nadkin_IS\GCD\View\askQuestion;
use function PHP_Nadkin_IS\GCD\View\showResult;

function gcd($a, $b) {
    return $b ? gcd($b, $a % $b) : $a;
}

function startGame() {
    showWelcome();
    $a = rand(1, 100);
    $b = rand(1, 100);
    $correctAnswer = gcd($a, $b);
    $userAnswer = (int)askQuestion("Найдите НОД чисел $a и $b");
    showResult($userAnswer === $correctAnswer, $correctAnswer);
}
?>