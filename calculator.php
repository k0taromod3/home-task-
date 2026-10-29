<?php

function calculator($a, $b, $operation) {
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

echo calculator(10, 5, '+');
echo calculator(10, 0, '/');