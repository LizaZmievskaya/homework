<?php
/**
 * Created by PhpStorm.
 * User: Elizaveta
 * Date: 07.09.2016
 * Time: 23:21
 */


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost/homework/data.php');
$data = curl_exec($ch);
curl_close($ch);
//var_dump($data);