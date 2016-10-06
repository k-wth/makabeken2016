# 4.条件分岐
条件分岐は他の言語と大差ありません。
## if

```php
  <?php
    $age = 20;

    if($age < 20){
      echo "未成年";
    }else {
      echo "成人";
    }
  ?>
```

## switch
```php
  <?php
    $pref = '奈良';

    switch ($pref){
      case '東京':  // breakしないと、下まで読みに行く.
      case '千葉':
      case '神奈川':
        echo '関東です';
        break;


      case '大阪':
        echo '関西です';
        break;

      default:
        echo "海外です";
    } 
  ?>
```





