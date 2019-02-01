<?php

// header("Content-Type:text/html;charset:utf8");
// $name = "hsuanwang";
// $password = "allen456123";

// try{
//     $link = new PDO("mysql:host=localhost;dbname=test;charset=utf8",$name,$password);
//     echo"資料庫登入成功";
// }
// catch(PDOException $e){
//     echo"資料庫連線失敗,訊息:{$e -> getMessage()}";
// }



header("Content-Type:text/html;charset:big5");
$host = "localhost";
$name = "hsuanwang";
$password = "allen456123";
$file = "test";


try{
    $link = new PDO("mysql:host=localhost;dbname=test;charset =utf8",$name,$password);
    
}
catch(PDOException $e){
    print "資料庫連結失敗,訊息：{$e ->getMessage()}</br>";
}




?>