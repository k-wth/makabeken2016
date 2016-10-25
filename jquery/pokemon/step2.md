# イベントをつける
## scriptファイルの準備
jsのscriptファイルを用意します.HTML内に書いてもいいです.
### script.js
```javascript 
  $(function() {

  });
```

## イベントをつける
### 左の矢印をクリックした時のイベント
```javascript
 $("#left").click(function(){
  // クリックした時の処理をここに書く.
  console.log("左");
 }); 
```

### 右の矢印をクリックした時のイベント
```javascript
 $("#right").click(function(){
  // クリックした時の処理をここに書く.
  console.log("右");
 }); 
```

### ポケモンのアイコンをクリックした時のイベント
```javascript
 $("#char_select li img").click(function(){
  // クリックした時の処理をここに書く.
  console.log("ポケモン選択");
 }); 

```
それぞれをクリックした時にコンソールにメッセージが出ればok
