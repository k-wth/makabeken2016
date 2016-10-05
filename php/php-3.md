# 文字列の扱い
## 文字列の結合
文字列の結合はjsとかだと
```javascript
  var m1 = "Hello";
  var m2 = "World";

  console.log(m1+m2);
```
とかなので、「+」を使う。phpは「.」を使う。
```php
  <?php
    $m1 = "Hello";
    $m2 = "World";

    echo $m1.$m2;
  ?>
```
変数だけでなく、文字列そのままとも結合できる。
```php
  <?php
    $name = "KIMIKO";
    echo "私の名前は".$name."です。";
  ?>
```
## 文字の検索
##