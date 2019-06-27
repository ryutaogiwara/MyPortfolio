<?php
include 'shared/header.php';
require '/Applications/MAMP/htdocs/8001_Myportfolio/app/functions/products.php'
?>

<?php
fetch_products($result);
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
        <a href="show.php">&raquo; 口コミを見る</a>
        <br><br>
      </div>
    </div>
  </div>

  <?php
  include 'shared/footer.php';
  ?>
