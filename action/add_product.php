<?php 
   include '../connection.php';
   session_start();
   if (isset($_POST['pro_id'])) {
   	$pro_id=$_POST['pro_id'];
   	$cus_id=$_SESSION['cus_id'];
   	$sql="INSERT INTO orders (CusId,ProId) values ('$cus_id','$pro_id')";
   	$conn->query($sql);
   	echo json_encode("success");
   }else{
   	header('location:index.php');
   }

 ?>