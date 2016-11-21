# 外部からDBへのアクセス
PHPからDBにアクセスするやり方を書きます.特に今回は、[PDO(PHP Data Objects)](http://php.net/manual/ja/book.pdo.php)を利用したアクセスの方法をまとめます.  
他の方法として[mysqli](http://php.net/manual/ja/book.mysqli.php)の方法があるので、比較してみてもいいです.

## PDOを利用したDB接続の基本
### DBへの接続

 * DBのHOSTの名前
 * ログインするユーザーの名前
 * パスワード
 * DBの名前

などの情報を与えることによってDBにアクセスすることができます.

```php
  <?php

    // localhostにあるDBへのアクセス例.
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db_name = "DB_NAME";

    try {

        $db = new PDO(
          "mysql:host={$host};dbname={$db_name};charset=utf8",$user, $pass);

      } catch (PDOException $e) {

        echo "接続に失敗しました. : ".$e->getMessage();

      }

  ?>
```

これで$dbにDBへの接続情報が入ります.

### SQLの生成
```php
  <?php

    // 文字列としてSQL文を生成します. 
    $sql = "SELECT * FROM `table_name` WHERE 1";

    $stmt = $this->PDO->prepare($sql); 
  ?>
```
```php
  <?php

  ?>
```
### SQLの実行
実行して結果を受け取ります.
```php
  <?php
    $result = $stmt->execute($prams);
  ?>
```

### 結果の受け取り方法

#### SQLが実行できたか.
```php
  <?php

  ?>
```
#### 結果のリストを取得(array)
```php
  <?php

  ?>
```
#### 結果のリストを1件ずつ取得
```php
  <?php

  ?>
```

### DBオブジェクトの破棄
安全のために、最後にはオブジェクトを破棄してやることが必要です.
```php
  <?php
    $db = null; 
  ?>
```

## DBConnection
手順的な作業が多いので、Classにしてまとめましたので、それを使ってみてください。[ここからダウンロードしてください](./DBConnection.php)(必要最低限の機能しか入れていないので、適宜改良してください.)そのうち改良します.  使い方を書きます.

### DBへの接続
```php
  <?php

    // まず、Classのファイルを読み込んでおいてください.
    require "DBConnection.php";

    // newでオブジェクトを生成.
    $connect = new DBConnection();

  ?>
```
### SQLの実行
#### SQLにパラメーターが特にない場合
```php
  <?php
    $sql = "";
    $connect->execute_query($sql);
  ?>
```
#### SQLにパラメーターがある場合
```php
  <?php
    $sql = "";
    $connect->execute_query($sql,array());
  ?>
```