<h2> 4.条件分岐 </h2>
  <?php
    // if
    $age = 20;
    
    if ($age < 20 ) { // if(条件式)
      echo "未成年";
    }else {
      echo "成年";
    }

    // switch-case
    switch ($age) {
      case 20:
        echo "今年は成人式!!!!!!!!!";
        break;  
        // ここで処理が切れるようにbreakは必須です。
      default:
        echo "それ以外";
        break;
    }

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