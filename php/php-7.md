# 7. 関数
## 引数なし・戻り値なし
```php
  <?php
    // 関数(引数なし・戻り値なし)
    function Test() {
      echo "test<br/>";
    }

    Test(); 
  ?>
```
## 引数あり・戻り値なし
```php
  <?php
    /*
     * @pram $messgae:String;
     */
    function Test2($message){
      echo $message."<br>";
    }

    Test2("あああああああああ");
  ?>
```
## 引数なし・戻り値あり
```php
  <?php
    /*
     * @return Int;
     */
    function Test3() {
      return 1;
    }

    $id = Test3();
    Test3();  // 怒られない.
    echo $id."<br />";
  ?>
```
## 引数あり・戻り値あり
```php
  <?php
    /*
    * @pram $message:String
    * @return Int;
    */
    function Test4($message){
      echo $message."<br>";
      return strlen($message);  // 文字列のバイト数を返す.
    }

    $length = Test4("あああああああああアアアアアア");
    echo "length : ${length}"."<br />";
  ?>
```
