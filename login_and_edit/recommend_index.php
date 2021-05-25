<?php
  require_once "function.php";
  state_of_login();

  $table = "recommend";
  $amount = 3;   //DBから引っ張ってくる記事の数

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta charset="UTF-8">
  <title>レコメンド編集ページ</title>
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
        <section id="new">
          <div id="new_box">
            <h2>レコメンドを新規登録</h2>
            <p class="btn"><a href="recommend_make_article.php">登録</a></p>
          </div>

        </section>

        <section id="dishes">
          <div id="dishes_box">
            <h2>レコメンドを修正する</h2>
            <?php
              $data = select_desc($dbInfo, $table, $amount);
              display_data($data, $table);
            ?>
          </div>
        </section>

          <p class="arrow"><a href="../index.php"><i class="fas fa-angle-double-left"></i>本番ページへ移る</a></p>

        </div>
      </div>
    </div>
  </body>
  </html>
