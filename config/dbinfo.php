<?php
    //接続するDBの設定
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "sample_bbs";

    $mysqli = new mysqli($host,$user,$password,$db);

    //接続失敗処理
    if($mysqli->connect_error){
      error_log($mysqli->connect_error);
      exit;
    }

 ?>
