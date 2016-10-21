# jQueryでのイベント処理の仕方
clickとかmouse動かした時とか、動的なイベントを処理するとできることがいろいろ増えます.

以下のHTMLのコードを用意します。
```html
  <!DOCTYPE html>
  <html>
  <head>
    <title>イベント</title>
    <!--jQueryのscriptを呼び出す.-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!--jQueryを読み込んだ後に自分のscriptを書く.-->
    <script type="text/javascript">

      $(function() {
        // ここにjQueryを書く.

      });
    
    </script>
  </head>
  <body>
  </body>
  </html>
```
## Click (Toutch)
```html
  <div 
    id = "box_click" 
    style = "width: 100px; height: 100px; background-color: #aaa"
  >click</div>
```
```javascript
  $("#box_click").click(function(){
    // ここに.clickされた時の処理を書く.
    // thisって、クリックされたもののオブジェクト
    $(this).css("background-color","#00FFFF");
  });
```
## MouseOver / MouseOut
```html
  <div 
    id = "box_mouse" 
    style = "width: 100px; height: 100px; background-color: #bbb"
  >mouse</div>
```
```javascript
  $("#box_mouse").mouseover(function(){
    // ここに.mousemoveされた時の処理を書く.
    $(this).css("background-color","#00FFFF");
  });
  $("#box_mouse").mouseout(function(){
    // ここに.mousemoveされた時の処理を書く.
    $(this).css("background-color","#bbb");
  });
```
## Hover
```html
  <div 
    id = "box_hover" 
    style = "width: 100px; height: 100px; background-color: #bbb"
  >hover</div>
```
```javascript
  $("#box_hover").hover(function() {
    // over.
    $(this).css("background-color","#00FFFF");
  }, function() {
    // out.
    $(this).css("background-color","#bbb");
  });
```
## MouseMove
```html
  <div 
    id = "box_move" 
    style = "width: 500px; height: 100px; background-color: #ccc"
  >move</div>
```
```javascript
  $("#box_move").mousemove(function(e){ 
    // このeはイベントオブジェクト(mouseが動いた場所とか入っている)

    var x = e.clientX;  
    var y = e.clientY;
    // clientはbox_moveの左上を原点とした座標.

    $(this).text(x+":"+y);
      
  });
```

