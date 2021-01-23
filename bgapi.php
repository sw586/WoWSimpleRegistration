<?php
/**
 * Created by PhpStorm.
 * User: JosefCox
 * Date: 2021/1/23
 * Time: 17:28
 */

$img=file('img.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
