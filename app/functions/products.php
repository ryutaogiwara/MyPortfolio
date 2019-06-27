<?php
function fetch_products($result)
{
  // 先ほど作成したPDOインスタンス作成をそのまま使用します
  require '/Applications/MAMP/htdocs/8001_Myportfolio/app/db/pdo__connect.php';

  // SQL文を準備します。「:id」がプレースホルダーです。
  $sql = 'SELECT
            product_id,
            product_name,
            product_description
          FROM
            products';
  // PDOStatementクラスのインスタンスを生成します。
  $prepare = $dbh->prepare($sql);

  // PDO::PARAM_INTは、SQL INTEGER データ型を表します。
  // SQL文の「:id」を「3」に置き換えます。つまりはidが3より小さいレコードを取得します。
  $prepare->bindValue(':id', 3, PDO::PARAM_INT);

  // プリペアドステートメントを実行する
  $prepare->execute();

  // PDO::FETCH_ASSOCは、対応するカラム名にふられているものと同じキーを付けた 連想配列として取得します。
  $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

  // 結果を出力(railsでいうpry)
  var_dump($result);
}
