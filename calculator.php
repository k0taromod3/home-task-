<?php

function calculator($a, $b, $operation) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Ошибка: аргументы должны быть числами";
    }

    switch ($operation) {
        case '+': return $a + $b;
        case '-': return $a - $b;
        case '*': return $a * $b;
        case '/': return $b == 0 ? "Ошибка: деление на ноль" : $a / $b;
        case '**': return $a ** $b;
        default: return "Ошибка: неизвестная операция";
    }
}

echo calculator(10, 5, '+');  // 15
echo calculator(10, 0, '/');  // Ошибка: деление на ноль