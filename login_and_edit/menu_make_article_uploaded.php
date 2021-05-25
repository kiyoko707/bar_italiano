<?php
  require_once "function.php";
  state_of_login();

  $time =  date("YmdHis");
  $table = "menu";
  $id = null;
  $name1 = $_POST["name1"];
  $name2 = $_POST["name2"];
  $price = $_POST["price"];
  $photo = "./images/"."image_".$time.".jpg";
  $header_path = "menu_make_article.php";
  $delete_flag = 0;

  photo_upload($photo, $header_path);
  insert($dbInfo, $table, $id, $name1, $name2, $price, $photo, $delete_flag);
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
  <title>メニューの新規登録完了</title>
</head>
<body>
<div id="wrap" class="yu_mincho">
  <header>
    <h1><a href="edit_index.php"><img src="../images/logo_1line.png" alt="イタリア料理店「オッティモ」のロゴ"></a></h1>
    <nav>
      <h3>EDIT</h3>
      <p><a href="logout.php">ログアウト</a></p>
    </nav>
  </header>

  <div id="contents">
    <h2>登録しました</h2>
    <p class="arrow"><a href="menu_index.php"><i class="fas fa-angle-double-left"></i>戻る</a></p>
  </div>

  <footer>
    <p id="copyright">&copy bal italiano del mare OttimO 2018</p>
  </footer>
</div>
</body>
</html>
