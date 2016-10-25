# 下準備
## どんなアプリケーションにするか考えて見る
今回は練習なので、勉強した内容をひたすら詰めこめるものを考えて見る。入れたい要素はこんなの

 * スクロールのメニューがある.
 * 基本的なjQueryのイベントを使える.
 * DOM操作をしてみる.
 * CSSの操作をしてみる.
 * XMLでajaxの練習を行える.

## ベースのHTMLを用意
ベースのプロジェクトは[ここ](./pokemon.zip)

### index.html
```html 
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="wrapper">
      <!--ゲームの世代を切り替えるナビゲーション-->
      <div id="nav">
        <ul id="game_select">
          <li>赤・緑・青・ピカチュウ</li>
          <li>金・銀・クリスタル</li>
        </ul>
        <img id="left" src="img/left.png">
        <img id="right" src="img/right.png">
      </div>
      <!--どのポケモンの図鑑を見るかの選択部分-->
      <ul id="char_select">
          <li><img src="./img/pokemon_1-g.jpg"></li>
          <li><img src="./img/pokemon_1-r.jpg"></li>
          <li><img src="./img/pokemon_1-b.jpg"></li>
      </ul>
      <!--図鑑内容のpreview-->
      <img id="preview" src="img/pokemon_1-g.jpg">
      <div id="name">フシギダネ</div>
      <div id="comment">うまれたときから せなかに しょくぶつの タネが あって すこしずつ おおきく そだつ。</div>
    </div>
  </body>
  </html>
```

### style.css 
```css 
  @charset 'utf-8';
  @font-face { 
    font-family: 'pixel-font';
    src: "../PixelMplus10-Regular.ttf";
   }
  *,html,body,div,ul,ol,li { margin: 0px; padding: 0px; position: relative;}
  #wrapper {
    width: 500px;
    height: 500px;
    margin: auto;
    position: absolute;
      top: 80px;
      left: 0px;
      right: 0px;
    overflow: hidden;
  }

  #nav img {
    width: 30px;
    position: absolute;
      top: 20px;
    opacity: 0.2;
  }
  #nav img:hover {
    opacity: 0.8;
  }
  #left {
      left: 0px;
  }
  #right {
      right: 0px;
  }
  #game_select {
    width: 1000px;
    list-style: none;
    padding: 20px 0px;
    left: 0px;
  }
  #game_select li {
    float: left;
    width: 500px;
    text-align: center;
  }
  #char_select {
    list-style: none;
    margin: 50px ;
  }
  #char_select li {
    float: left;

    padding: 10px;
    margin: 5px;
  }
  #char_select li img {
    width: 50px;
  }
  #preview {
    clear: both;
    display: block;
    margin: 0 auto;
  }
  #name {
    width: 100%;
    text-align: center;
    padding: 30px 0px;
  }

  #comment {
    font-family: 'pixel-font';
    width: 80%;
    height: 130px;
    margin: 0 auto;
    font-size: 0.8em;
    background-color: rgba(0,0,0,0.5);
    color: #fff;
    padding: 20px;
    border-radius: 30px;
  }

```