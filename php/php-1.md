# 1. 標準出力
## print
[print](http://php.net/manual/ja/function.print.php)はphpの文字を出力するためのメソッドです。  
引数として文字列を必要とします。かっこがあってもなくても動くのが特徴です。
```php
  <?php
  print("message");
  ?>
```
```php
  <?php
  print "message";
  ?>
```

## echo
[echo](http://php.net/manual/ja/function.echo.php)もprint同様のphpの出力のための関数です。
print同様かっこの省略ができます。基本的にはかっこを省略して書くのが一般的なのではないかと思います。

```php
  <?php
    echo("message");
  ?>
```
```php
  <?php
    echo "message";
  ?>
```
### echoの省略
phpは特性上、htmlに分断されることが多い為、echoの省略表現を覚えておくと便利です。
```php
  <?=$message?>
```
