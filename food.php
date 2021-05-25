<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- 商品紹介記事の編集用インデックスです -->
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta charset="UTF-8">
  <title>Food -OttimO-</title>
</head>

  <body id="food">

    <?php
      require_once "login_and_edit/function.php";

      $amount = 12;   //DBから引っ張ってくる記事の数

      $sql = "SELECT * FROM menu WHERE delete_flag = 0 order by id DESC LIMIT $amount";
      $result = $dbInfo->query( $sql );
    ?>


    <div id="wrap" class="yu_mincho">
      <header id="top">
        <h1><a href="index.php"><img src="images/logo_1line.png" alt="イタリア料理店「オッティモ」のロゴ"></a></h1>

        <nav id="nav_pc" class="pc">
          <ul class="icons">
            <li><img src="images/icon_tw.png" alt="ツイッターのアイコン"></li>
            <li><img src="images/icon_fb.png" alt="フェイスブックのアイコン"></li>
            <li><img src="images/icon_inst.png" alt="インスタグラムのアイコン"></li>
          </ul>
          <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="food.php"  class="navi_under_line">Food</a></li>
            <li><a href="drink.php">Drink</a></li>
            <li><a href="party.php">Party</a></li>
          </ul>
        </nav>

        <nav id="nav_sp" class="sp">
          <div id="nav-drawer" class="sp">
            <input id="nav-input" type="checkbox" class="nav-unshown">
            <label id="nav-open" for="nav-input"><span></span></label>
            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
            <div id="nav-content">
              <ul class="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="food.php">Food</a></li>
                <li><a href="drink.php">Drink</a></li>
                <li><a href="party.php">Party</a></li>
              </ul>
              <ul class="icons">
                <li><img src="images/icon_tw.png" alt="ツイッターのアイコン"></li>
                <li><img src="images/icon_fb.png" alt="フェイスブックのアイコン"></li>
                <li><img src="images/icon_inst.png" alt="インスタグラムのアイコン"></li>
              </ul>
              <dl>
                <dt>bal italiano del mare OttimO</dt>
                <dd>北九州市小倉北区浅野1丁目2-3<br>穂気ビル1F</dd>
                <dd>092-111-1111</dd>
              </dl>
            </div>
          </div>
        </nav>
      </header>

      <div id="graphic_pc" class="pc">
        <p><img id="main_photo_pc" src="images/food_main_pc.jpg" alt="メインビジュアル"></p>
        <div id="category"><p>FOOD</p></div>
      </div>
      <div id="graphic_sp" class="sp">
        <p><img id="main_photo_sp" src="images/food_main_mobile.jpg" alt="メインビジュアル"></p>
        <div id="category"><p>FOOD</p></div>
      </div>

      <div id="contents">
        <div id="contents_left">
          <section id="concept">
            <div id="concept_box">
              <h2 class="pc">
                  <span class="under_line_top">南イタリアの</span><br>
                  <span class="under_line_bottom">漁師が生んだ下町の味</span>
              </h2>
              <h2 class="sp">
                <span class="under_line_top">南イタリアの</span><br>
                <span class="under_line_top">漁師が生んだ下町の味</span>
              </h2>
            </div>
          </section>

          <section id="menu">
            <div id="menu_box">
              <?php
                foreach( $result as $key => $value ){
                  $id = $value["id"];
                  $name1 = $value["name1"];
                  $name2 = $value["name2"];
                  $price = $value["price"];
                  $photo  = $value["photo"];

                  //記事の表示

                  echo '<figure>';
                    echo '<p><img src="login_and_edit/'.h($photo).'" alt="'.h($name1).'"></p>';
                    echo '<p class="price">￥'.h($price).'yen</p>';
                    echo '<figcaption>'.h($name1).'<br>'.h($name2).'</figcaption>';
                  echo '</figure>';
                }

                $dbInfo = null;
              ?>
            </div>
          </section>
        </div>

        <aside id="shop">
          <div id="shop_box">
            <h3>SHOP INFO</h3>
            <figure>
              <p><img src="images/entrance.jpg" alt="お店の入り口"></p>
              <figcaption>
                bal italiano del mare<br>
                OttimO
              </figcaption>
              <h5>Address</h5>
              <p>北九州市小倉北区浅野1丁目2-3<br>穂気ビル1F</p>
              <h5>Tel</h5>
              <p>092-111-1111</p>
              <h5>Lunch</h5>
              <p>11:30-14:30 (LO 14:00)</p>
              <h5>Dinner</h5>
              <p>19:00-23:00 (LO 23:00)</p>
              <h5>Close</h5>
              <p>毎週月曜日</p>
              <h5 class="margin_bottom_5">Map</h5>
              <p><img src="images/map.png" alt="地図"></p>
            </figure>
          </div>
        </aside>
      </div>

      <footer>
        <p id="page_top"><a href="#top"><i class="fas fa-angle-up my-brown"></i><span style="margin-right: 1em;"></span>Page Top</a></p>
        <div id="footer_box">
          <ul class="navigation pc">
            <li><a href="index.php">Home</a></li>
            <li><a href="food.php">Food</a></li>
            <li><a href="drink.php">Drink</a></li>
            <li><a href="party.php">Party</a></li>
          </ul>
          <dl>
            <dt>bal italiano del mare OttimO</dt>
            <dd>北九州市小倉北区浅野1丁目2-3<br>穂気ビル1F</dd>
            <dd>092-111-1111</dd>
          </dl>
          <p id="copyright">&copy bal italiano del mare OttimO 2018</p>
        </div>
      </footer>
    </div>
  </body>
  </html>
