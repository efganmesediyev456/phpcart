<?php
session_start();
include "core/db.php"; 
if(isset($_POST["id"])){
    $id=$_POST["id"];

    $sql="select * from card where id={$id}";
    $st=$pdo->query($sql);
    $st->execute();
    $pro=$st->fetch(PDO::FETCH_OBJ);

    if(isset($_SESSION["cart"])){
        $array=$_SESSION["cart"]["products"];
        $product_count=$_SESSION["cart"]["total_count"];
        $product_price_all=$_SESSION["cart"]["total_price_all"];


    }else{
        $array=[];
        $product_count=0;
        $product_price_all=0;
    }


    
    
    if(array_key_exists($pro->id,$array)){
            $array[$pro->id]->count=$array[$pro->id]->count+1;
            $array[$pro->id]->total=$array[$pro->id]->price*$array[$pro->id]->count;
            $product_count=$product_count+1;
            $product_price_all=$product_price_all+$array[$pro->id]->price;
    }else{
        $pro->count=1;
        $pro->total= $pro->count*$pro->price;
        $array[$pro->id]=$pro;
        $product_count=$product_count+1;
        $product_price_all=$product_price_all+$pro->total;
    }
  
    $_SESSION["cart"]["products"]=$array;
    $_SESSION["cart"]["total_count"]=$product_count;
    $_SESSION["cart"]["total_price_all"]=$product_price_all;
    echo json_encode($_SESSION["cart"]);
}