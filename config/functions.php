<?php

///////////////////////
//記事一覧を取得するメソッド
///////////////////////
function getposts($mysqli){

  //掲示板の投稿一覧を取得する
  $sql = "select id,title, comment from thread";

  $result = $mysqli->query($sql);

  if(!$result){
      exit;
  }else{
    $posts = array();
    //結果の行を連想配列で取得する

    while($row = $result->fetch_assoc()){
      $posts[] = $row;
    }
    return $posts;
  }

}




/////////////
//掲示板詳細取得
/////////////

function get_thread_detail($thread_id,$mysqli){
  $sql = "select title,comment from thread where id = $thread_id";
  $result = $mysqli->query($sql);
  if(!$result){
    exit;
  }else{
    $detail = array();
    //結果の行を連想配列で取得する

    while($row = $result->fetch_assoc()){
      $detail[] = $row;
    }
    return $detail;
  }

}


///////////////////
//掲示板保存処理
///////////////////
function save_thread($title,$comment,$mysqli){

  $title = $mysqli->real_escape_string($title);
  $comment = $mysqli->real_escape_string($comment);

  $sql = "INSERT INTO thread(
                id,
                title,
                comment,
                user_id
              )
          values(
                0,
                '$title',
                '$comment',
                1
              )";

    $result = $mysqli->query($sql);

    if(!$result){
      echo "作成失敗";
    }else{
      echo "新規作成しました";
    }

}


/////////////
//コメント一覧取得
/////////////
function get_comment_list($thread_id,$mysqli){
  $sql = "select comment from comment where thread_id = $thread_id";
  $result = $mysqli->query($sql);
  if(!$result){
    exit;

  }else{

    if(mysqli_num_rows($result) == 0){
        return false;
    }else{
      $comments = array();
      while($row = $result->fetch_assoc()){
          $comments[] = $row;
      }
      return $comments;

    }

  }
}


///////////////
//コメント保存処理
//////////////
function save_comment($thread_id,$comment,$mysqli){
  $comment = $mysqli->real_escape_string($comment);
  $sql = "INSERT INTO comment(
                id,
                thread_id,
                user_id,
                comment
              )
          values(
                0,
                '$thread_id',
                0,
                '$comment'
              )";

          $result = $mysqli->query($sql);
            if(!$result){
              echo 'エラーがありました';
            }else{
              echo '書き込み完了';
            }
}




  ?>
