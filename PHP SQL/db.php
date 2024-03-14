<?php
$link = mysqli_connect("localhost","root","","india") or die();
 /*$sql = "create database india";
 $res = mysqli_query($link,$sql);
 if($res){
    echo "data base created succesfully";
}else {
    echo "connection failed";
 }*/

 /*$sql = "create table formtable(
        slno int auto_increment primary key,
        name varchar(50),
        age int(10),
        contact varchar(12),
        password varchar(50))";
       $res = mysqli_query($link,$sql);
       if($res){
        echo "table cretaed successfully";
        }else{
         echo "not created";
       }*/

 /*$sql1 = "insert into formtable(name,age,contact,password) values('gitu','28','9348998989','@1234')";
 $res1 = mysqli_query($link,$sql1);
if($res1){
    echo "data inserted success  fully";
}else{
    echo "not inserted";
}*/

if(isset($_POST['click'])){

    $my = $_POST['f1'];
    $age = $_POST['f2'];
    $contact = $_POST['f3'];
    $password = $_POST['f4'];


    $sql1 = "insert into formtable(name,age,contact,password) values( '$my','$age','$contact','$password')";


    $res2 = mysqli_query($link,$sql1);

    if($res2){
        echo "data inserted successfully";
    
    }else{
        echo "data not inserted success fully";
    }
}
















 /*if($link){
      echo "connection successfully exist";
 }else{
      echo "connection failed";

   }*/

// $link = new mysqli("localhost","root","");
// if($link){
//          echo "connection successfully entered";
//     }else{
//          echo "connection failed";
//      }

?>