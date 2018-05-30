<?php
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHPの口コミサイト</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">掲示板</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample05">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">記事一覧</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="newthread.php">新規投稿</a>
        </li>
        <li class="nav-item dropdown">
          <div class="dropdown-menu" aria-labelledby="dropdown05">
            <a class="dropdown-item" href="index.php">記事一覧</a>
            <a class="dropdown-item" href="newthread.php">新規投稿</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
