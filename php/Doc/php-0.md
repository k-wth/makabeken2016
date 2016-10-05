# PHPの基礎
## phpの実行環境

phpはサーバー上で動く言語のため、実行環境として[Apache](https://ja.wikipedia.org/wiki/Apache_HTTP_Server)などのwebサーバーを必要とします。  
この環境をローカルに作り出すために[MAMP](https://www.google.co.jp/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwil5JCB4sLPAhVDp5QKHZ4GBSEQFggcMAA&url=https%3A%2F%2Fwww.mamp.info%2F&usg=AFQjCNHYwhvfJ0-kf69b0pe7Ys_3qcMB1A&sig2=BNfmLN_TU66l0JBvSfQKaw&bvm=bv.134495766,d.dGo)などを使うと便利です。

1. [MAMP](https://www.google.co.jp/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwil5JCB4sLPAhVDp5QKHZ4GBSEQFggcMAA&url=https%3A%2F%2Fwww.mamp.info%2F&usg=AFQjCNHYwhvfJ0-kf69b0pe7Ys_3qcMB1A&sig2=BNfmLN_TU66l0JBvSfQKaw&bvm=bv.134495766,d.dGo)をダウンロード・インストール.
2. 設定からポート->[WebとMySQLのポートを80と3306に設定]を選択.  
3. サーバーを起動.

## phpファイルの保存場所
MAMPで設定されている[サーバードキュメントのルート]の場所にphpファイルを置くことによって、phpを実行することができます。一般的には  
```
  /Application/MAMP/htdocs
```
に置かれることが一般的なので、このhtdocsのフォルダをサイドバーに登録しておくと便利です。

htdocs以下に置かれたphpファイルは
```
  http://localhost
```
のURLにアクセスすることで確認することができます。

## phpタグ
phpはHTMLの中に埋め込むことで実行するのが一般的なプログラムです。
そのため、一つのファイルの中にHTMLと混在します。
見分けるために、php(<?php ?>)タグで囲みます。
```
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
    <!--ここから上はHTML-->
    <?php
      /*
      * ここがPHP.
      */
    ?>
    <!--ここから下はHTML-->
  </body>
  </html>
```

