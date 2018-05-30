<?php
include 'parts/header.php';
include '../config/dbinfo.php';
include '../config/functions.php';
 ?>

<!-- 記事の一覧を取得する -->

<div class="container mt-4">
  <div class="row">
    <div class="col-8 offset-2">
      <!-- 投稿確認 -->
      <?php
        if($_POST){

          if(!empty($_POST['title'] && !empty($_POST['comment']) )){
              //保存処理
              $title = $_POST['title'];
              $comment = $_POST['comment'];
              save_thread($title,$comment,$mysqli);
          }else{
              echo "エラーがあります";
          }

        }

       ?>


      <!-- フォームの表示 -->
      <form action="" method="post">
        <label>タイトル</label>
        <input type="text" class="form-control" id="title" name="title">
        <label>内容</label>
        <textarea class="form-control" id="comment" name="comment" placeholder="内容"></textarea>
        <button type="submit" class="btn btn-info">投稿する</button>
      </form>
    </div>
  </div>
</div><!-- end container -->

 <?php
include 'parts/footer.php';
  ?>
