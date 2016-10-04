<?php
/**
 * Created by PhpStorm.
 * User: Elizaveta
 * Date: 07.09.2016
 * Time: 23:08
 */

session_start();
$_SESSION['name'] = 'Liza';
session_destroy();