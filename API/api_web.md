# APIの呼び出し(Web)
formに入力した値をAPIに投げて、そのレスポンスを判断して画面遷移をします.

### HTML
```html
  <form id="form" action="top.php">
    <input id="email" type="email" name="mail"><br />
    <input id="pass" type="password" name="pass"><br />
    <input id="send" type="button" name="send" value="ログイン">
  </form> 
```

### javascript(jQuery)
```javascript
$(function() { 

    $("#send").click(function(){

      var mail = $("#email").val();
      var pass = $("#pass").val();
      
     $.ajax({
      url: 'http://localhost/sample_api/login.php',
      type: 'POST',
      data: {
        "mail" : mail,
        "pass" : pass
      },
      timeout: 1000,
      error: function(){
        // エラーのハンドリング.
        console.log("エラーですよ");
      },
      success: function(d){ 

        if(d == 1){
          // alert("ログインできました！！！！");
          $("#form").submit();
        }else {
          alert("ログインに失敗しました");
        }
      }
     }
    ); 
  }); 
});   
```