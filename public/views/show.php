<?php
include 'app/config/dataace.php';
include 'shared/header.php';
?>

<body>
  <div class="container">

    <?php
    include 'shared/nav.php';
    ?>

  </div> <!-- /container -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>モテるようになる薬</h2>
        <p>この薬を飲むと、美女からモテます。すごい薬です。モテるだけじゃなく健康にもなります。すごいです。すごいです。すごいです。すごいです。すごいです。すごいです。すごいです。</p>
        <hr>
      </div>
      <div class="col-xs-12">
        <h4>名前：山田 太郎さん（2016/9/1）</h4>
        <p>信じられません。モテすぎて困っています。すぐに買うべきです。おすすめです。おすすめです。おすすめです。おすすめです。おすすめです。</p>
      </div>
      <div class="col-xs-12">
        <h4>名前：佐々木 太郎さん（2016/7/28）</h4>
        <p>まったく効果ありません。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。買わないほうがいいです。</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>口コミを投稿する</h3>
        <form action="" method="post">
          <textarea name="add_review" class="form-control" placeholder="口コミを記入してください。"></textarea>
          <button type="submit" class="btn btn-default">投稿する</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'shared/footer.php';
  ?>
