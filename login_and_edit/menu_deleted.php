<?php
  require_once "function.php";
  state_of_login();

  $table = "menu";
  $id = $_POST['id'];   //削除したい記事のid
  $delete_flag = 1;   //記事の論理的非表示

  delete($dbInfo, $table, $id, $delete_flag);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name1="viewport" content="width=device-width, initial-scale=1">
  <meta name1="format-detection" content="telephone=no">
  <meta charset="UTF-8">
  <title>メニューの削除完了</title>
</head>
<body>

  <div id="wrap" class="yu_mincho">
    <header>
      <h1><a href="edit_index.php"><img src="../images/logo_1line.png" alt="イタリア料理店「オッティモ」のロゴ"></a></h1>
      <h3>EDIT</h3>
      <nav><a href="logout.php">ログアウト</a></nav>
    </header>

    <h2>削除しました</h2>
    <p class="arrow"><a href="menu_index.php"><i class="fas fa-angle-double-left"></i>戻る</a></p>
  </div>
</body>
</html>
