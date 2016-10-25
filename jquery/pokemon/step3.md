# スクロールのメニューを作る
上のやつ。左右の矢印をクリックするとポケモンの世代が変わるようにする。

## とりあえず左右に動くようにしてみる
最初は2つの状態で左右に動くようにしてみる.

### 右をクリック(金銀を表示)
```javascript
  $("#right").click(function(){

    $("#game_select").animate(
      { left : -500; }, 500
    );

  });
```

### 左をクリック(赤青緑を表示)
```javascript
  $("#left").click(function(){

    $("#game_select").animate(
      { left : 0; }, 500
    );

  });
```
これでとりあえず左右に動くようになる(はず。)

## 3つ以上でもスクロールできるように考えてみる
幾つか方法があるので検討してみる。

### 今の場所を基本にした移動
基本のpositionが`` left: 0px `` であることを考えると、左に動くときには今の場所から+500px,右に動くときには-500pxであるような気がする。では、今の場所を知ることができればその位置をベースにできそう？
#### cssから現在の位置を取得
今の場所をcssから教えてもらうためには
```javascript
  var pre_pos = $("#game_select").css("left");
```
で取得することができる。しかし、これをそのままconsoleに出すと、"px"が付いてくるので簡単に数値計算ができない....。困ったのでpxを消すことにしてみる.
```javascript
  // 邪魔なpxを取り除く.
  pre_pos = pre_pos.replace("px","");
```
[replace](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/String/replace)は文字列を置換するための関数.一つ目の引数("px")に一致する部分をふたつ目の引数("")に置き換えてくれます.  
これで見た目上は数字になりましたが、一応確認.
```javascript
  console.log(typeof(pre_pos));
```
これで出力が数値データ(number)になっていて欲しいところですが、出力は多分string.うーん見た目は数字だけど中身は文字列らしい.仕方がないので数値データに直しておく.
```javascript
  pre_pos = parseInt(pre_pos);
```
[parseInt](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/parseInt)は文字列を数値型に直してくれる関数. [parseFloat](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/parseFloat)とかもあるので、状況によって使い分けましょう。  
これでやっと今の座標を取得することができました。  
(まどろっこしく思うかもしれませんが、使う場面の多いTipsなので覚えておくと便利です.)

#### positionから現在の位置を取得
まどろっこしかったのでもう少し簡単に座標を取りたい.そこで[position](http://semooh.jp/jquery/api/css/position/_/)というjQueryの関数を使って見る.

```javascript
  var position = $("#game_select").positon();
```
positonから返って来る値は{left,top}のオブジェクトで返って来るそうなので、.leftで左の位置を取得できます.

```javascript
  var pre_pos = position.left;
```
取れました。

cssから取るかpositionから取るか、状況に応じて使い分けられると便利です.

#### 取ってきたposを利用して移動.
左に行く時には+500,右に行く時には-500で移動します。
```javascript
  // 右の矢印.
  $("#right").click(function(){
    // game_selectの位置情報を取得する.
    var pre_pos = ... // ここは好きなposの取り方を使ってみてください.

    var next_pos = pre_pos-500; // 次の移動先の座標を計算しておく.

    $("#game_select").animate(
      { // ここにcssが変わった値を書く.
        left : next_pos,
      }
      , 500 // ここにアニメーションのスピードを書く.
    );

  });

  // 左の矢印.
  $("#left").click(function(){
    // game_selectの位置情報を取得する.
    var pre_pos = ... // ここは好きなposの取り方を使ってみてください.

    var next_pos = pre_pos+500 // 次の移動先の座標を計算しておく.
      
    $("#game_select").animate(
      { // ここにcssが変わった値を書く.
        left : next_pos,
      }
      , 500 // ここにアニメーションのスピードを書く.
    );

  });
```


### 選択している場所を保存する方法
座標を計算で求める方法.例えば、1つ目(赤青緑)のときの座標は0px、2つ目(金銀)の時は500px...と考えていくと
```javascript
  1 -> 0px
  2 -> 500px
  3 -> 1000px
  4 -> 1500px
  5 -> 2000px
  ...
```
となるはず.つまり、表示している世代をcount_seriesという変数に入っていると仮定して、計算的に求めると、
```javascript
  var next_pos = 500*(count_series-1);
```
で求められそう.
#### 下準備1 : 選択している世代を保存しておく.
とりあえず変数が必要なので、一番上に
```javascript
  var count_series = 1;
```
としておく.
#### 下準備2 : クリックした時にカウントアップ・カウントダウンする.
今、どの世代を選択しているのかカウントしておく.
```javascript
  // 右の矢印.
  $("#right").click(function(){
    // 次の世代に移動(+1).
    count_series++;
  });

  // 左の矢印.
  $("#left").click(function(){
    // 前の世代に移動(-1).
    count_series--;
  });
```
これで準備はok
#### count_seriesに応じて移動の座標を決定する.
準備しておいた式を組み合わせてみる.
```javascript
  // 右の矢印.
  $("#right").click(function(){
    // 次の世代に移動(+1).
    count_series++;

    // count_seriesから座標を計算する.
    var next_pos = 500*(count_series-1);

    $("#game_select").animate(
      { // ここにcssが変わった値を書く.
        left : next_pos,
      }
      , 500 // ここにアニメーションのスピードを書く.
    );
  });

  // 左の矢印.
  $("#left").click(function(){
    // 前の世代に移動(-1).
    count_series--;

    // count_seriesから座標を計算する.
    var next_pos = 500*(count_series-1);

    $("#game_select").animate(
      { // ここにcssが変わった値を書く.
        left : next_pos,
      }
      , 500 // ここにアニメーションのスピードを書く.
    );
  });
```
これで終わり.後々count_seriesを使うことを考えておくと、これが実は一番現実的かもしれない.

### 

## 行き過ぎを止める
左にも右にも行き過ぎるので行き過ぎないようにする。これも幾つか方法があるので検討してみる。

### ul(game_select)の横幅から判断する
横幅以上にいくともうコンテンツがないことになるので、それ以上いかないようにすれば良い？
#### 左のストップ
ulは左に隠すようにスクロールしているので、理論上0以上になることがない.ので、0以上にならないようにする.
```javascript
  if(next_pos < 0) {
    // 移動してもいい判定.
  }
```

#### 右のストップ
右のストップはulの横幅以上に移動量がいかなければ良い.そのためにまず、ulの横幅を取得しておく.これもcssから取る場合はparseIntまでしておく.
```javascript
  var width = $("#game_select").css("width");
  width = width.replace("px","");
  width = parseInt(width); 
```
ちなみに、[width](http://semooh.jp/jquery/api/css/width/_/)というメソッドもあるので、これからも取れる.

いろいろな条件式が考えられるので、理解できるやつを自分で探してください.

##### 合計の移動量から判定する
next_posは右にめいいっぱいまで移動するとwidth*(-1)になる。そのため、next_pos+widthが0になる地点は、一番右端まで移動した段階なので、この時点でもう振り切っていることになる。ので、移動してはいけない.
```javascript
  if(next_pos+width != 0) { 
    // 移動してもいい判定.
  }
```
これは同義の判定式.
```javascript
  if(next_pos != width*(-1)) { 
    // 移動してもいい判定.
  }
```
##### 現状の移動量がwidth以下であることを判定する.
[Math.abs](https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Math/abs)は絶対値を取得するための関数.next_posの絶対値は原点0から移動した量を指すので、これはwidth以下であれば移動が可能であることを指す.
```javascript
  if(Math.abs(next_pos) < width) { 
    // 移動してもいい判定.
  }
```

### 登録されているliの数から判断する
game_selectにいくつのliが登録されているかを取得して、count_seriesがそれ以上/
以下の値に行かないようにする方法.  
liの数は、[length](http://semooh.jp/jquery/api/core/length/)というメソッドから取得することができる.
```javascript
  var length = $("#game_select li").length;
```
あとはcount_seriesと比較.
```javascript
  if((count_series > 0) && (count_series <= length)) {
    // 移動してもいい判定.
  }
```
