# 6. 配列
## 配列
配列([array](http://php.net/manual/ja/language.types.array.php))
```php
  <?php
    // 配列の宣言.
    $makabeken = array();

    // 配列の「初期化」+「宣言」を一回に行った時.
    // $配列の名前 = array(配列の内容をカンマ区切りで書く.)
    $makabeken =  array('徳永','阿部','久保埜','長谷川','田中1','田中2','小林','渡邉','冨樫','原田' );

    // 宣言した配列に「要素」を足す.
    $makabeken = array();

    // 要素を一つだけ足す.
    $makabeken[] = "徳永";

    // 要素をいっぱい足す.
    array_push($makabeken,"田中サン","阿部","長谷川");

    // 配列を確認するためのテストの関数.
    var_dump($makabeken);
  ?>
```
## 連想配列 
```php
  <?php
    $makabeken = array(
                    9000 => '徳永' , 
                    13001 => '阿部' , 
                    13002 => '久保埜' , 
                    13003 => '長谷川' , 
                    15001 => '渡邉' , 
                    );
                    
    var_dump($makabeken);

    // 連想配列の宣言.
    $makabeken = array();

    // 連想配列の要素を追加する.[]の中にkeyを入れる!
    $makabeken[11111] = "田中クン";

    var_dump($makabeken); 
  ?>
```