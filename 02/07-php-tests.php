<?php
/**
 * Created by PhpStorm.
 * User: kotos
 * Date: 24.01.2019
 * Time: 21:16
 * ТЕСТЫ
МОДУЛЬНЫЙ ТЕСТ – это код, содержащий
утверждения о том, как должны работать
отдельные модули (части) вашей программы
В PHP принято использовать модульные
тесты для того, чтобы доказать, что ваша
программа работает верно, и для того, чтобы
отслеживать возможные ошибки при
изменении кода.
function maxnumber($a, $b) {
...
}
assert( 1 == maxnumber(1,1) );
assert( 1 == maxnumber(-1,1) );
assert( 1 == maxnumber(1,-1) );
• Старайтесь писать тесты до написания кода
• Используйте конструкцию assert, она
встроена в язык
• Установите настройки:
• display_errors On
• error_reporting E_ALL
 *
 */

// Если утверждение истино - то ничего невидно, но если ктото изменил код и накосячил
// тест выдаст ошибку или предупреждение!

// Это и есть "Unit тесты" - те сторожевые маячки
// В сложных проектах используют специальные фреймворки для Unit тестов

function maxnum($a, $b) {

    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}