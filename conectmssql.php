<?php
try {
$hostname = "pacifi_7667094.sqlserver.dbaas.com.br";
$dbname = "pacifi_7667094";
$username = "pacifi_7667094";
$pw = "pacific99";
$pdo = new PDO ("dblib:host=$hostname;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Erro de Conex_o " . $e->getMessage() . "\n";
    exit;
  }
      $query = $pdo->prepare("select * from INFORMATION_SCHEMA.TABLES");
      $query->execute();

      for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['TABLE_NAME']."<br/>";
      }

      unset($pdo);
      unset($query);
?>
