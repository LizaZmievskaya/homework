<?php
/**
 * Created by PhpStorm.
 * User: Elizaveta
 * Date: 07.09.2016
 * Time: 21:44
 */

$text = file_get_contents('files/text.txt');
$newText = str_replace('PHP', '', $text);
file_put_contents('files/new.txt', $newText);