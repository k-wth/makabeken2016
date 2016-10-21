# jQueryでアニメーションする.
移動やフェードイン・アウトのアニメーションであれば、jQueryでサクッと書くことができます。

以下のサンプルのHTMLを用意しておきます。
```html
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>アニメーション</title>
    <!--jQueryのscriptを呼び出す.-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </head>
  <body>
    <div 
      id = "box_anim" 
      style = "width: 100px; height: 100px; background-color: #aaa; position: absolute; "
    ></div>
  </body>
  </html>
```

## 移動 
```js
  $("#box_anim").animate({left : 200, top : 200,},1500); 
```

## 拡大縮小
```js
  $("#box_anim").animate({width : 200, height : 200,},1500); 
```

## 変形
```js
  $("#box_anim").animate({'border-radius':50,},1500); 
```

## フェードイン
```js
  $("#box_anim").fadeIn(1500); 
```

## フェードアウト
```js
  $("#box_anim").fadeOut(1500); 
```

## アニメーションの終わりを取得する
```js
  $("#box_anim").animate({left : 200, top : 200,},1500,function(){
    // ここがアニメーションが終わった時に実行される.
    alert("終わったよ！！！！");
  }); 
```