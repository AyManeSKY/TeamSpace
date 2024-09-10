<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=teamspace","root","");
     
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>
