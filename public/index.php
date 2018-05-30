<?php
include 'parts/header.php';
include '../config/dbinfo.php';
include '../config/functions.php';
 ?>

<!-- 記事の一覧を取得する -->

<!-- リストで表示させるように変更 -->
<div class="container mt-4">
  <div class="row">
    <div class="col-8 offset-2">

      <div class="list-group" style="max-width:450px;">

        <span class="list-group-item list-group-item-action active">スレッド一覧</span>

          <?php
          $posts = getposts($mysqli);
          foreach($posts as $post){
              ?>

              <a href="detail.php?id=<?php echo $post['id']; ?>" class="list-group-item list-group-item-action"><?php echo $post['title']; ?></a>

              <?php
          }


          ?>

        </div><!-- list-gropu-->
      </div>
  </div>
</div><!-- end container -->

 <?php
include 'parts/footer.php';
  ?>
