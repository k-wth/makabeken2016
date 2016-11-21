# 選択したポケモンによって図鑑の詳細を切り替えてみる
DOM操作して画像を切り替えるやり方を実践しましょう。  
準備していた通り、ポケモンをクリックした時の処理は
```javascript

 $("#char_select li img").click(function(){
  // クリックした時の処理をここに書く.
  console.log("ポケモン選択");
 }); 

```
ここに書けばいいことになっている.  
どのポケモンの画像をクリックしたかを取得するためにはthisを使います.

#### thisって何？！？！？！
this(これ！！！)というのは、[ここら辺](http://www.jquerystudy.info/tutorial/basic/this2.html)を読んでみるとわかるかも？？  
`` $("#char_select li img") ``というセレクタは複数の要素に当てはまります。なので、このセレクタだけではどれをクリックしたか特定することはできません。そこでクリックしたものを保存して持ってくれているのがthisです。

```javascript

 $("#char_select li img").click(function(){
  // クリックした時の処理をここに書く.
  console.log($(this).attr("img"));
 }); 

```
[attr](http://semooh.jp/jquery/api/attributes/attr/name/)はタグの属性値を取得するメソッド. これでクリックしたpokemonの画像を取得できました.    
属性値というのはタグが持っている「id」とか「class」とか「src」とか「title」とか...   

attrは前に使ったcssメソッドと同じで引数の数を二つにすることでその値に入れ替えることができます.
```javascript

  $("セレクタ").attr("属性","新しい属性値");

```


じゃあこの画像をそのままpreviewに当てはめてみると良いのでは？？

```javascript

  $("#preview").attr("src",$(this).attr("img"));

```


