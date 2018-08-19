<?php

// 3.
$age = 0;

if ((18 <= $age) && ($age <= 65)) {
    print ("Вам ещё работать и работать").PHP_EOL;
} elseif ($age > 65) {
    print ("Вам пора на пенсию").PHP_EOL;
} elseif ((1 <= $age) && ($age <= 17)) {
    print ("Вам ещё рано работать").PHP_EOL;
} else {
    echo "Неизвестный возраст".PHP_EOL;
}
