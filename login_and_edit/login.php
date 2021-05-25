<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>ログイン</title>
</head>

<body>
  <div id="wrap" class="yu_mincho">
    <header>
      <h1><a href="edit_index.php"><img src="../images/logo_1line.png" alt="イタリア料理店「オッティモ」のロゴ"></a></h1>
      <nav>
        <h3>EDIT</h3>
      </nav>
    </header>

    <div id="contents">
      <h2>イタリア料理店「OttimO」の編集ページ</h2>
      <section id="form">
        <div id="form_box">
          <form action="edit_index.php" method="POST">
            <p><label>ID<br><input id="user_id" type="text" name="user_id"></label></p>
            <p><label>password<br><input id="password" type="password" name="password"></label></p>
            <p><input class="input_btn" type="submit" name="送信"></p>
          </form>
        </div>
      </section>
    </div>
  </div>
</body>
</html>
