<?php
header('content-type:text/html;charset=utf-8');

$host ='localhost';
$user ='root';
$pswd ='root';
$dbname ='db_demo';
$dbport = '3306';

//php7,如果链接失败返回一个false
$dbLink = mysqli_connect($host,$user,$pswd,$dbname,$dbport);

if(!$dbLink){
    echo '数据库链接失败';
}?>

