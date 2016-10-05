  <h2> 7.関数 </h2>
  <?php

  /*
    swiftの関数:
    func Test()->void { ... }
  */

  // 関数(引数なし・戻り値なし)
  function Test() {
    echo "test<br/>";
  }

  Test();

  /*
    swiftの関数:
    func Test2(message:String)->void { ... }
  */

  // 関数(引数あり・戻り値なし)
  /*
   * @pram $messgae:String;
   */
  function Test2($message){
    echo $message."<br>";
  }

  Test2("あああああああああ");

  /*
    swiftの関数:
    func Test2()->Int { return 1 }
  */

  // 関数(引数なし・戻り値あり)
  /*
   * @return id:Int;
   */
  function Test3() {
    return 1;
  }

  $id = Test3();
  Test3();  // 怒られない.
  echo $id."<br />";


  // 関数(引数あり・戻り値もあり)
  /*
   * @pram message:String
   * @return length:Int;
   */
  function Test4($message){
    echo $message."<br>";
    return strlen($message);  // 文字列のバイト数を返す.
  }

  $length = Test4("あああああああああアアアアアア");
  echo "length : ${length}"."<br />";

  ?>