<?php
  /**
  * 
  */
  class DBConnection
  {
    function __construct() {

      $host = "localhost";
      $user = "root";
      $pass = "root";
      $db = "rpg";

      try {
        // ここは必要になったら書き足します.
        $options = array();

        $this->PDO = new PDO(
          "mysql:host={$host};dbname={$db};charset=utf8",
          $user, $pass, $options );
        $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return true;

      } catch (PDOException $e) {

        echo "接続に失敗しました. : ".$e->getMessage();

        return false;
      }
    }

    function __destruct(){ 
      $this->PDO = null; 
    }

    /*
     * queryを実行するための関数.
     * @pram $sql : SQL文.
     * @pram $prams : SQL文に含まれているパラメーターのarray.
     */
    function execute_query($sql,$prams=array()){

      $stmt = $this->PDO->prepare($sql); 

      try {

        $success = $stmt->execute($prams);

        if($success == FALSE){ return FALSE;
        }else if((strpos($sql,"SELECT") === 0)||(strpos($sql,"select") === 0)){
          // SELECTの場合は配列で結果を返す.
          $result = $stmt->fetchAll();
          return $result;
        }else if((strpos($sql,"INSERT") === 0)||(strpos($sql,"insert") === 0)){
          // INSERTの場合はフラグを返す.
          return $success;
        }else if((strpos($sql,"UPDATE") === 0)||(strpos($sql,"update") === 0)){
          // UPDATEの場合はフラグを返す.
          return $success;
        }else if((strpos($sql,"DELETE") === 0)||(strpos($sql,"delete") === 0)){
          // DELETEの場合はフラグを返す.
          return $success;
        }

      }catch(PDOException $e){


        echo $e->getMessage();
      }
    }

  }


?>