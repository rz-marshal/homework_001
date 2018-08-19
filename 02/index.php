<?php

// 2.
const ALL_DRAWINGS = 80;
const DRAWN_WITH_MARKERS = 23;
const DRAWN_WITH_PENCIL = 40;

$drawnWithoutPaint = DRAWN_WITH_MARKERS + DRAWN_WITH_PENCIL;
$drawnWithPaint = ALL_DRAWINGS - $drawnWithoutPaint;

echo "На школьной выставке ".ALL_DRAWINGS." рисунков. ".DRAWN_WITH_MARKERS.
" из них выполнены фломастерами, ".DRAWN_WITH_PENCIL." карандашами, а остальные
 — красками. Сколько рисунков, выполненных красками, на школьной выставке?\n".PHP_EOL;

echo "Пусть X — нарисовано красками, A — нарисовано фломастерами, B — карандашами,
Z — всего рисунков. Тогда X = Z - (A + B)".PHP_EOL;

echo "X = ".ALL_DRAWINGS." - $drawnWithoutPaint = $drawnWithPaint".PHP_EOL.PHP_EOL;
echo "$drawnWithPaint рисунков было выполнено красками.".PHP_EOL;