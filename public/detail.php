<?php
include 'parts/header.php';
include '../config/dbinfo.php';
include '../config/functions.php';
 ?>

<!-- 記事の一覧を取得する -->

<div class="container mt-4">

<?php
    //掲示板のIDを取得する
    $thread_id = $_GET['id'];
    $thread_detail = get_thread_detail($thread_id,$mysqli);
    foreach($thread_detail as $detail){
    ?>
      <h2><?php echo $detail["title"]; ?></h2>
      <p><?php echo $detail["comment"]; ?></p>
<?php

}

 ?>


<!-- コメント一覧を表示する　-->
<hr>
<h3>コメント一覧</h3>

<?php
  //$thread_idを使いまわします
  $comments = get_comment_list($thread_id,$mysqli);
  if($comments !== false){
    foreach($comments as $comment){
?>

  <P><?php echo $comment['comment']; ?></P>

<?php
    }
  }


 ?>


<!-- 返信ボタン押下 -->
<?php
if($_POST){
  if(!empty($_POST['comment'])){
      $comment = $_POST['comment'];
      save_comment($thread_id,$comment,$mysqli);
  }else{
    echo "エラーがあります";
  }
}
?>

<!-- 返信機能　-->
<form action="" method="post" class="mt-5">
  <label>コメントする</label>
  <textarea class="form-control" id="comment" name="comment"></textarea>
  <button type="submit" class="btn btn-info mt-3">コメントする</button>
</form>


</div><!-- end container -->

 <?php
include 'parts/footer.php';
  ?>
