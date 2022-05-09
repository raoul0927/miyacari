<!DOCTYPE html>
<?php
  $mode = "input";
  if( isset($_POST["back"] ) && $_POST["back"] ){
  } else if( isset($_POST["confirm"] ) && $_POST["confirm"] ){
  $mode = "confirm";
  }else if( isset($_POST["send"] ) && $_POST["send"] ){
  $mode = "send";
  }
?>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>宮崎キャリア・デザインスクール</title>
    <meta name="description" content="インタークロスは宮崎で働きたい人と、宮崎で人材を採用したい企業が集まるメディアです。宮崎の求人や企業の情報提供、就職・転職に関するイベントやニュースの発信、職業訓練校の運営を通じて、人と企業をつなげます。" />

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="./css/style.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./js/script.js"></script>
  </head>
  <body class="contact">
    <header>
      <div class="openbtn1">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="gnav">
        <div class="logo">
          <a href="./index.html"><img src="./img/logo.png" alt="" /></a>
        </div>

        <nav>
          <ul>
            <li><a class="link-anime" href="web-designer.html">Webデザイナー養成科</a></li>
            <li><a class="link-anime" href="web-business.html">Webビジネス養成科</a></li>
            <li><a class="link-anime" href="web-dtp.html">Web・DTPデザイナー養成科</a></li>
            <li><a class="link-anime" href="access.html">アクセス</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>

      <div class="mail-form">


      <?php if( $mode == "input"){ ?>
        <h2>メールでのお問い合わせ</h2>

        <p>
          お問い合わせ内容の確認後、担当者より連絡いたします。<br />
          下記項目にご入力いただき、「内容を確認する」ボタンを押してください。
        </p>
        <!-- 入力 -->
        <form action="./contact.php" method="post">
          <div>
            <label>お名前</label>
            <input type="text" placeholder="例)宮崎太郎" name="fullname" value="" />
          </div>

          <div>
            <label>メールアドレス</label>
            <input type="text" placeholder="例)XXXX@XXX.com" name="email" value="" />
          </div>

          <div>
            <label>お問い合わせ (40文字以内)</label>
            <textarea name="message" cols="25" rows="10"></textarea>
          </div>

          <input class="btn" type="submit" value="内容を確認する" name="confirm"/>
        </form>
        <div class="tell-form">
          <h2>電話でのお問い合わせ</h2>

          <p class="tell-number">0985-55-0963</p>

          <p>
            受付時間 9:00～18:00 <br />（土日祝、年末年始を除く）<br />
            ご利用の際は、電話番号をお間違えのないようご注意ください。
          </p>
        </div>

      <?php } else if ( $mode == "confirm" ){ ?>
        <!-- 確認 -->
        <form action="./contact.php" method="post">
          <div>
            <label>お名前<br></label>
            <?php echo $_POST["fullname"] ?>
          </div>

          <div>
            <label>メールアドレス<br></label>
            <?php echo $_POST["email"] ?>
          </div>

          <div>
            <label>お問い合わせ (40文字以内)<br></label>
            <?php echo $_POST["message"] ?>
          </div>

          <input class="btn" type="submit" value="戻る" name="back"/>
          <input class="btn" type="submit" value="送信" name="send"/>
      </form>
      <?php } else { ?>
        <!-- 完了 -->
        <p class="confirm">送信しました。お問い合わせありがとうございました。</p>
        <a class="btn" href="./index.html"><input  type="submit" value="トップに戻る"/></a>
      <?php } ?>
      </div>

      <div id="back-top">
            <a href="#"><img src="./img/back-top.png" alt="" /></a>
      </div>

    </main>

    <footer>
      <div class="link-wrapper">
        <div>
          <ul>
            <li><a class="link-anime" href="web-designer.html">Webデザイナー科</a></li>
            <li><a class="link-anime" href="web-business.html">Webビジネス科</a></li>
            <li><a class="link-anime" href="web-dtp.html">Web・DTPデザイナー科</a></li>
          </ul>
        </div>

        <div>
          <ul>
            <li><a class="link-anime" href="access.html">アクセス</a></li>
            <li><a class="link-anime" href="contact.php">お問い合わせ</a></li>
          </ul>
        </div>
      </div>

      <a href="index.html">
        <img src="./img/logo.png" alt="" />
      </a>

      <small>© Miyazaki Career Design School All Rights Reserved.</small>
    </footer>
    <script>
        $(".openbtn1").click(function () {
          $(this).toggleClass("active");
          });

          $(".openbtn1").click(function () {
          if ($(".gnav").css("display") == "none") {
          $(".gnav").fadeIn();
          } else {
          $(".gnav").fadeOut();
          }
        });
      </script>
  </body>
</html>
