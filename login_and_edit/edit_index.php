<?php
  require_once(dirname(__FILE__) . '/function.php');
  login();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>メニュー編集</title>
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
        <section id="concept">
          <div id="concept_box">
            <h2 class="btn"><a href="menu_index.php">メニュー編集画面</a></h2>
            <h2 class="btn"><a href="recommend_index.php">レコメンド編集画面</a></h2>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>
