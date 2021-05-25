<?php
  require_once "function.php";
  state_of_login();
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
  <title>メニューの新規登録</title>
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
      <section id="form">
        <div id="form_box">
          <form action="menu_make_article_uploaded.php" method="POST" enctype="multipart/form-data">
            <p><label>商品名<br>
              <input type="text" name="name1" maxlength="14" required><br>
              <input type="text" name="name2" maxlength="14">
            </label></p>
            <p><label>価格<br><input type="text" name="price" required></label></p>
            <p><input type="file" name="photo" accept="image/*"></p>
            <p><input class="input_btn" type="submit" value="送信する"></p>
          </form>
        </div>
      </section>

      <p class="arrow"><a href="menu_index.php"><i class="fas fa-angle-double-left"></i>戻る</a></p>
    </div>
  </div>
</body>
</html>
