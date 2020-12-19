 <?php 
    include '../connection.php';
    if (isset($_POST['UserName'])) {
    	$UserName=$_POST['UserName'];
    	$UserPassword=$_POST['UserPassword'];
        $CusName=$_POST['CusName'];
    	$sql="INSERT INTO user (UserName,UserPassword) Values ('$UserName','$UserPassword')";
    	$conn->query($sql);
    	$last_id = $conn->insert_id;
        $sql="INSERT INTO customer (UserId,CusName) Values ('$last_id','$CusName')";
        $conn->query($sql);
     

        echo json_encode("success");//echo json_encode($UserName);: becuase type in sign_up as a json
    }else{
    	header('location:../signup.php');
    }
 ?> 