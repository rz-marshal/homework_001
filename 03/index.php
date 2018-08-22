<?php

// 3.
$age = 0;

if ($age >= 18 && $age <= 65) {
    echo "Вам ещё работать и работать" . PHP_EOL;
} elseif ($age > 65) {
    echo "Вам пора на пенсию" . PHP_EOL;
} elseif ($age > 0 && $age < 18) {
    echo "Вам ещё рано работать" . PHP_EOL;
} else {
    echo "Неизвестный возраст" . PHP_EOL;
}
