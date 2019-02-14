<?php
/**
 * Включение файлов
 *
 * Архитиктурно верно - разделять свою программу
 *
 * Created by PhpStorm.
 * User: kotos
 * Date: 24.01.2019
 * Time: 21:08
 *
 * АРХИТЕКТУРНО ВЕРНО разделять свою
программу на отдельные файлы.
В качестве первого шага к хорошей
архитектуре можно собрать в один файл
функции, а в другие файлы тот код, который
их использует.
include __DIR__ . '/functions.php';
• __DIR__ – это «магическая» константа. Она
всегда содержит в себе полный путь в ФС до
папки с текущим файлом
• include подключает файл, в случае его
недоступности – выведет предупреждение,
но продолжит работу программы
• require подключает файл, но в случае его
недоступности вызовет фатальную ошибку
и завершит программу
• include_once и require_once не будут
подключать указанный файл, если он уже
ранее был подключен
 */

//
include  __DIR__ . '\06-ext-file.php'; // 'Z:\MY_LABS\PHP\php-001.tambasov.mn\www\profit-php-1\02\06-ext-file.php';
//echo __DIR__ . '\06-ext-file.php'; // C:\WEB_SERVER\www\MY_LABS\PHP\php-001.tambasov.mn\www\profit-php-1\02
//06-include-files.php
// __DIR__ - путь до данного файла


//
echo maxnum(3, 5);



