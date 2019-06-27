<?php
include 'app/config/dataace.php';
include 'shared/header.php';
?>

<body>
  <div class="container">
    <?php
    include 'shared/nav.php';
    ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <h2>ログイン</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" class="form-control" id="user_email" name="user_email">
          </div>
          <div class="form-group">
            <label for="user_password">パスワード</label>
            <input type="password" class="form-control" id="user_password" name="user_password">
          </div>
          <button type="submit" class="btn btn-default">ログイン</button>
        </form>
      </div>
    </div>
  </div>

  <?php
  include 'shared/footer.php';
  ?>
