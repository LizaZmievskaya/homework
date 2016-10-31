<?php
/**
 * Created by PhpStorm.
 * User: Elizaveta
 * Date: 07.09.2016
 * Time: 23:21
 */


$ch = curl_init();
$data = curl_exec($ch);
curl_close($ch);