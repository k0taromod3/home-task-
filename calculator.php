<?php

function calculator($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
        case '/':
            return $b == 0 ? "Ошибка: деление на ноль" : $a / $b;
            break;
        case '**':
            return $a ** $b;
            break;
        default:
            return "Ошибка: неизвестная операция";
            break;
    }
}

echo calculator(10, 5, '+');
echo calculator(10, 0, '/');