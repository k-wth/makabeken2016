<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    $dir = "./"; 
    $files = scandir($dir);
  ?>
  
  <ul>
    <?php foreach ($files as $file): 
    // "."から始まる名前のファイルの名前だったら、continueする.
      if(strpos($file,".") == 0) { continue; }
      
      // 自分だったら消したい.
      // basename($_SERVER['PHP_SELF'])で自分のファイル名が取れるらしい
      if($file == basename($_SERVER['PHP_SELF'])){
        continue;
      }
    ?>
      <li>
        <a href="<?=$file;?>"><?=$file;?></a>
      </li>
    <?php endforeach; ?>   
  </ul>

</body>
</html>