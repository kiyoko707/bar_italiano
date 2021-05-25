<?php

  //データベースの接続文字列
  $dsn = "";
  $user = "";
  $password = "";


  $dbInfo = new PDO( $dsn, $user, $password );




  //htmlspecialchars
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
  }



  //写真のアップロード
  function photo_upload($photo, $header_path){
    $tempfile = $_FILES["photo"]["tmp_name"];

      if (is_uploaded_file($tempfile)) {
        if ( move_uploaded_file($tempfile , $photo )) {
          }
        else {
            header('Location: '.$header_path.'');     //新規登登録へ戻る
          }
      }
      else {
        header('Location: '.$header_path.'');     //新規登登録へ戻る
      }
  }



  //登録情報の取得
  function select_desc($dbInfo, $table, $amount){
    $sql = "SELECT * FROM $table WHERE delete_flag = 0 order by id DESC LIMIT $amount";
    $result = $dbInfo->query( $sql );

    foreach( $result as $key => $value ){
      $id = $value["id"];
      $name1 = $value["name1"];
      $name2 = $value["name2"];
      $price = $value["price"];
      $photo  = $value["photo"];
      $data[$key] = array($id, $name1, $name2, $price, $photo);
    }

    return $data;
  }



  //登録情報表示
  function display_data($data, $table){

      foreach ($data as $key => $value) {
        echo '<figure>';

          echo '<p><img src="'.h($data[$key][4]).'" alt="'.h($data[$key][1]).'"></p>';
          echo '<p class="price">￥';
            if($data[$key][3] == ""){ echo '-'; }else{ echo h($data[$key][3]); }
          echo 'yen</p>';
          echo '<figcaption>';
            if($data[$key][1] == ""){ echo '-'; }else{ echo h($data[$key][1]); }
          echo '<br>';
            if($data[$key][2] == ""){ echo '-'; }else{ echo h($data[$key][2]); }
          echo '</figcaption>';
          echo '<form action="'.$table.'_edit.php" method="POST">';
          echo '<input type="hidden" name="id"    value="'.h($data[$key][0]).'">';
          echo '<input type="hidden" name="name1" value="'.h($data[$key][1]).'">';
          echo '<input type="hidden" name="name2" value="'.h($data[$key][2]).'">';
          echo '<input type="hidden" name="price" value="'.h($data[$key][3]).'">';
          echo '<input type="hidden" name="photo" value="'.h($data[$key][4]).'">';
          echo '<input class="input_btn" type="submit" value="編集">';
          echo '</form>';

          echo '<form action="'.$table.'_deleted.php" method="POST">';
          echo '<input type="hidden" name="id" value="'.h($data[$key][0]).'">';
          echo '<input class="input_btn" type="submit" value="削除">';
          echo '</form>';

        echo '</figure>';
      }

      $dbInfo = null;
    }



  //新規登録
  function insert($dbInfo, $table, $id, $name1, $name2, $price, $photo, $delete_flag){
    $sql = "INSERT INTO $table values(:id, :name1, :name2, :price, :photo, :delete_flag)";
    $stmt = $dbInfo->prepare( $sql );
    $stmt->bindParam( ":id",            $id,              PDO::PARAM_INT );
    $stmt->bindParam( ":name1",         $name1,           PDO::PARAM_STR );
    $stmt->bindParam( ":name2",         $name2,           PDO::PARAM_STR );
    $stmt->bindParam( ":price",         $price,           PDO::PARAM_STR );
    $stmt->bindParam( ":photo",         $photo,           PDO::PARAM_STR );
    $stmt->bindParam( ":delete_flag",   $delete_flag,     PDO::PARAM_INT );

    $result = $stmt->execute();
    $dbInfo = null;
  }



  //商品情報の修正
  function upload($dbInfo, $table, $id, $name1, $name2, $price, $photo, $delete_flag){
    $sql = "UPDATE $table SET name1=:name1, name2=:name2, price=:price, photo=:photo, delete_flag=:delete_flag WHERE id=:id";
    $stmt = $dbInfo->prepare( $sql );
    $stmt->bindParam( ":id",            $id,              PDO::PARAM_INT );
    $stmt->bindParam( ":name1",         $name1,           PDO::PARAM_STR );
    $stmt->bindParam( ":name2",         $name2,           PDO::PARAM_STR );
    $stmt->bindParam( ":price",         $price,           PDO::PARAM_STR );
    $stmt->bindParam( ":photo",         $photo,           PDO::PARAM_STR );
    $stmt->bindParam( ":delete_flag",   $delete_flag,     PDO::PARAM_INT );

    $result = $stmt->execute();

    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $dbInfo->query( $sql );

    $dbInfo = null;
  }



  //登録情報の消去
  function delete($dbInfo, $table, $id, $delete_flag){
    $sql = "UPDATE $table SET delete_flag=:delete_flag where id=:id";
      $stmt = $dbInfo->prepare( $sql );
    $stmt->bindParam( ":id",            $id,              PDO::PARAM_INT );
    $stmt->bindParam( ":delete_flag",   $delete_flag,     PDO::PARAM_INT );
    $result = $stmt->execute();

    $dbInfo = null;
  }



  //ログイン
  function login(){
    session_start();
    if(!isset($_SESSION["user_id"]) || !isset($_SESSION["password"])){
      if ($_POST["user_id"] != "" || $_POST["password"] != ""){
        header('Location: login.php');
        exit;
      }
      else{
        $_SESSION["user_id"] = $_POST["user_id"];
        $_SESSION["password"] = $_POST["password"];
      }
    }
  }



  //ログイン状態
  function state_of_login(){
    session_start();
      if(!isset($_SESSION["user_id"]) || !isset($_SESSION["password"])){
          header('Location: login.php');
          exit;
        }
  }



  //ログアウト
  function logout(){
    session_start();
    session_destroy();
  }


?>
