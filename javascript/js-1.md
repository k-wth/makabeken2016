# 1.標準出力
## console
jsでは一般的に標準出力の際には[consoleオブジェクト](https://developer.mozilla.org/ja/docs/Web/API/console)を用います。

### console.log
よく使うdebug用の出力です。特に必要性がなければこれを使うのがいい気がします

```js
  console.log("test"); 
```

### console.error
  consoleに吐かれたメッセージがエラーのメッセージであることがわかりやすいように<font color="red">赤色</font>のメッセージで書き出されます。

```js
  console.error("test"); 
```

### console.info
!(丸)マークがつきます。

```js
  console.info("test"); 
```

### console.warn
!(三角)マークがつきます。

```js
  console.warn("test"); 
```

### console.count
このconsoleが何回呼び出されたのかカウントしながらメッセージを吐いてくれます。

```js
  console.count("test"); 
```

### console.trace
どこのメソッドでconsoleが呼び出されたのか、詳細を表示してくれます。

```js
  console.trace("test"); 
```

### console.time / console.timeEnd
timeからtimeEndまでの時間を測定してくれます。


```js
  console.time("test"); 

  // ~~~

  console.timeEnd("test");  // 前のtime("test")が呼ばれた時からの時間を出力してくれる。 
```
