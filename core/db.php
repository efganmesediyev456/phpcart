<?php

try{
    $pdo=new PDO("mysql:host=localhost;dbname=phpshoppingcart","root","");
    $sql="select * from card";
    $st=$pdo->query($sql);
    $st->execute();
    $products=$st->fetchAll(PDO::FETCH_OBJ);
    
}catch(PDOException $e){
    echo $e->getMessage();
}