  <h2> 5. 繰り返し処理 </h2>
  <h3> 5-1. while </h3>
  <?php
  // 後でend系の記述を付け足します。
  // while -> TRUEの間繰り返す条件式.

  $i = 0; // $iの初期値は0.

  while ($i <= 10) {  // $iが10以下の間繰り返す.
    echo $i."<br />";
    $i++; 
    // $iに+1。この作業をしないと、$iは一生0のままなので、whileが延々ループする.
  }

  ?>
  
  <h3> 5-2. for </h3>
  <?php
    for ($i=0; $i<=10; $i++) { 
      echo $i."<br />";

      // whileと違うところは、自分でインクリメントしなくていいところ。
    }
  ?>


  <h3> ?? whileとforってどう使い分けるの ？？ </h3>
  同じループ構文のwhileとforですが、メリットとデメリットが実は大きく違うのです.

  <h4> while </h4>
  <ul>
    <li>
      メリット:数字以外のTRUE,FALSEの見分けでループの回数を決められる。
    </li>
    <li>
      デメリット:マジで無限ループになる。マジで。
    </li>
  </ul>
  <h4> for </h4>
  <ul>
    <li>
      メリット:よっぽどじゃない限り無限ループにならない。(ループの回転数が制御できる.)
    </li>
    <li>
      デメリット:一定回数しか回ってくれないので柔軟性が低い(ループの回数を特定できる時にしか使えない.)
    </li>
  </ul>
  
  <h3> 5-3. foreach </h3>
  <?php
    // foreachは、配列を回すことが専門のループ.

    // 配列です。
    $makabeken =  array('徳永','阿部','久保埜','長谷川','田中1','田中2','小林','渡邉','冨樫','原田' );

    foreach ($makabeken as $menber)  {
  //foreach (配列 as 取り出した時の一時的な名前)

      echo $menber."<br/>";

    }
    
    //========
    // 連想配列です.
    $makabeken = array(
                    '09000' => '徳永' , 
                    '13001' => '阿部' , 
                    '13002' => '久保埜' , 
                    '13003' => '長谷川' , 
                    '15001' => '渡邉' , 
                    );

    // =>(ダブルアロー演算子)は参照演算子.
    foreach ($makabeken as $gakuseki => $name) {
      echo $gakuseki." : ".$name."<br />";
    }

  ?>

  <h3> 5-4. do-while</h3>
  do-whileってなに？？？<br>
  先に処理が行われてからループに入るwhile文.<br>

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

    echo "=======================<br>";

    $i = 0;

    while ( $i < 10 ) { // 先に条件のチェックを行います。

      /*
      * 次に処理します。
      */

      echo $i."<br / >";

      // $iにプラス1.
      $i++;

    }

  ?>

  <h2> 5-5.多重ループ </h2>
  <?php

    for ($i=0; $i < 10; $i++) { // $iが列.
      
      echo $i.":";
      
      for ($j=0; $j < 10; $j++) {  // $jが行.

        echo $j."-";
      
      }

      echo "<br />";
    }
  ?>
  <h3> 5-5-1. breakとcontinue </h3>
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

    echo "==============================<br />";

    $i = 0;

    while ($i < 10) {
      
      // インクリメントは忘れない！！！！！！！！！！！！！
      $i++;

      if(!($i%2)) { continue; }

      echo $i."<br />"; 

    }

  ?>
