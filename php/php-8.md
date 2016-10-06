# PHPを使って目次を作ってみる
phpを使って、存在するファイルを自動的に目次にするアプリケーション(?)を作ってみよう.

## PHPの関数ってどんなものがあるの？
phpは今まで使ったことがない関数が多く存在しているので、確認しながら使ってみる。調べてみると色々な関数が比較的簡単に扱うことができるので、積極的に調べながら書くのが良い(気がする).  
phpのやさしいところとして、日本語のドキュメントが充実しています.   
[phpのドキュメント](http://php.net/)  

## どんな手順が必要？？
とりあえず流れを考えてみる.

 1. ディレクトリ(フォルダの中身)を取得する.
 2. その数分だけ、liタグを生成する.
 3. そのliタグの中に、ファイルへのリンクを設置する.

一個ずつ解決しましょう~
### ディレクトリ(フォルダの中身)を取得する.
うーん。とりあえず[php ディレクトリ ファイル一覧]とかで調べてみる.  
[scandir](http://php.net/manual/ja/function.scandir.php)を使ってみることに.  ドキュメントにサンプルも描いてあるので、それを参考にしながら書いてみます.

```php
  <?php
    $dir = './' // 取得したいディレクトリのpathを書く.
    $files = scandir($dir);
  ?> 
```
かけた。
``` var_dump($file); ```で確認してみる.
なんかいっぱい出てきたら多分ok.


### その数分だけ、liタグを生成する.
ここは[foreach](php-5.md)じゃないですかね.  
  `<li></li>`とかをechoするのは面倒なので`<?php ?>`を区切りながら書くと書きやすい？お好みで.
```php
    <ul>
      <?php foreach ($files as $file): ?>
        <li> ここにファイル名入れる </li>
      <?php endforeach; ?>   
    </ul>

```
「ここにファイル名入れる」がファイルの数分生成されればok.  
でもこのままじゃ意味ないので、ファイルの名前に変えたい.
```php
    <ul>
      <?php foreach ($files as $file): ?>
        <li> <?=$file;?> </li>
      <?php endforeach; ?>   
    </ul>
```
おー目次っぽくなってきた.

### そのliタグの中に、ファイルへのリンクを設置する.
htmlだしね.
```php
    <ul>
      <?php foreach ($files as $file): ?>
        <li>
          <a href="<?=$file;?>"><?=$file;?></a>
        </li>
      <?php endforeach; ?>   
    </ul>
```

### 動いた！！
こんな感じ
```php
  <html>
  <head>
    <title>目次をPHPで作ってみよう！</title>
  </head>
  <body>
    <?php
      $dir = "./"; 
      $files = scandir($dir);
    ?>
    <ul>
      <?php foreach ($files as $file): ?>
        <li>
          <a href="<?=$file;?>"><?=$file;?></a>
        </li>
      <?php endforeach; ?>   
    </ul>
  </body>
  </html>
```
結構シンプルにできた。
## もうちょっと使いやすくする！
修正点をちょっと考えてみる
### 表示中のファイルは目次には要らないんじゃない？
どうやって自分のファイルだって名前だけで判断すればいいんだろう.  
[php 自分 ファイル名]とかで調べる.[これこれ](http://negimemo.net/1705)  
ふーむ、``` basename($_SERVER['PHP_SELF']) ```で自分のファイル名が取れるらしい.

```php
    <?php
      $dir = "./"; 
      $files = scandir($dir);
    ?>
    <ul>
      <?php 
        foreach ($files as $file): 

          // $fileが自分の名前だったらcontinue(この後の処理はしない).
          if($file == basename($_SERVER['PHP_SELF'])){ continue; }

      ?>
        <li>
          <a href="<?=$file;?>"><?=$file;?></a>
        </li>
      <?php endforeach; ?>   
    </ul>
``` 
いい感じ
### .とかいらないよね.  
要らないよね-
```php
    <?php
      $dir = "./"; 
      $files = scandir($dir);
    ?>
    <ul>
      <?php 
        foreach ($files as $file): 
        
         // $fileが自分の名前だったらcontinue(この後の処理はしない).
         if($file == basename($_SERVER['PHP_SELF'])){ continue; }

         // "."から始まる名前のファイルの名前だったら、continueする.
         if(strpos($file,".") == 0) { continue; } 
      ?>
        <li>
          <a href="<?=$file;?>"><?=$file;?></a>
        </li>
      <?php endforeach; ?>   
    </ul>
``` 
消えた消えた(ついでにディレクトリのファイルも消えた...)
### ファイルとかもう一回展開してくれるとすごいいい.




