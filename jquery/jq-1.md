# セレクタ
jQueryのセレクタは基本的にCSSのものをそのまま用いることができます。より細かい指定が必要になった時にメソッドを用いて絞り込みも行えます.  
細かいものは[ここ](http://www.detelu.com/blog/2011/11/jquery-selector-traversing/)を見るのがオススメ.
## CSSベースのセレクタ
基本的にCSSのテクニックでどうにかなります。簡単なものを列挙します。  
CSSのセレクタは基本的に文字列として扱わなければいけない所が注意です.
### id
```js 
  $("#id")
```
### class
```js
  $(".class") 
```
### 属性値
```js
  $("div[data-name = 'name']") 
```

## メソッドを併用したセレクタ
細かい指定ができます。慣れてくるとこっちの方が簡単(な気がする).
### 子要素
```js
  $("#id").children();
  $("#id").children(".class");  // #idの中にある.classのついた子要素を取得.
```
### 子孫要素
```js   
  $("#id").find();
  $("#id").find(".class");  // #idの中にある.classのついた要素を孫も含めて全て取得.
```
### 親要素
```js 
  $("").parent(""); // 
```
### 兄弟要素
なんで姉妹じゃないんだろ
```js
  $("").siblings(); //  
  $("").siblings(""); //  
```
### 兄要素
なんで姉じゃないんだろう..
```js 
  $(“″).prev() // 
```
### 弟要素
なんで妹じゃないんだろう....
```js 
  $(“″).next() // 
```
### 余事象
```js 
  $("").not(""); // 
```
### 順番での取得
```js 
  $("").first(); // 
  $("").last(); // 
```