# 5. 繰り返し処理
## while
[while](http://php.net/manual/ja/control-structures.while.php)は条件式がTRUEである間{}の中の処理を繰り返し実行し続けるループです。
条件式が何らかの要因で変化しない限り永遠にTRUEもしくはFALSEになるため、注意しないと無限ループが発生するので注意.
```php
  <?php 
    $i = 0; // $iの初期値は0.

    while ($i <= 10) {  // $iが10以下の間繰り返す.
      echo $i."<br />";
      $i++; // $iに+1。この作業をしないと、$iは一生0のままなので、whileが延々ループする.
    }
  ?>
```
## do-while
```php
  <?php 
    $i = 0;

    do {

      /*
      * 先に処理します。
      */
      
      echo $i."<br / >";

      // $iにプラス1.
      $i++;

    } while ( $i < 10 );  // 条件のチェックを行います。
  ?>
```
## for
```php
  <?php 
    for ($i=0; $i<=10; $i++) { 
      echo $i."<br />";

      // whileと違うところは、自分でインクリメントしなくていいところ。
    }
  ?>
```
## foreach
```php
  <?php 
    // 配列です。
    $makabeken =  array('徳永','阿部','久保埜','長谷川','田中1','田中2','小林','渡邉','冨樫','原田' );

    foreach ($makabeken as $menber)  {
    //foreach (配列 as 取り出した時の一時的な名前)

      echo $menber."<br/>";

    }
  ?>
```
```php
  <?php 
    // 連想配列です.
    $makabeken = array(
                    '09000' => '徳永' , 
                    '13001' => '阿部' , 
                    '13002' => '久保埜' , 
                    '13003' => '長谷川' , 
                    '15001' => '渡邉' , 
                    );

    foreach ($makabeken as $gakuseki => $name) {
      echo $gakuseki." : ".$name."<br />";
    }
  ?>
```
## breakとcontinue
breakとcontinueはそれぞれループや条件分岐から抜けるための一文です。  
覚えると何かと役に立ちますが、それぞれで特徴が違うので注意。
```php
  <?php 
    $i = 0;

    while ($i < 100) {

      $j = 0;

      while ($j < 100) { 
        if ($j == 3) { break 2; } 
        echo "--".$j."<br />";
        $j++;
      }
      
      if ($i == 10) { break 1; }

      echo $i."<br />";

      $i++;

    }
  ?>
```
```php
  <?php 
    $i = 0;

    while ($i < 10) {
      
      $i++;

      if(!($i%2)) { continue; }

      echo $i."<br />"; 

    }
  ?>
```
