<?php
$link = mysqli_connect("localhost","root","","india");
$id = $_POST['sno'];
$name = $_POST['f1'];
$age = $_POST['f2'];
$contact = $_POST['f3'];
$sql = "update formtable set name='{$name}',age='{$age}',contact='{$contact}' where slno ='{$id}'";
$res = mysqli_query($link,$sql);
header ("location:read.php");

?>