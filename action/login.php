 <?php 
    include '../connection.php';
    if (isset($_POST['UserName'])) {
    	$UserName=$_POST['UserName'];
    	$UserPassword=$_POST['UserPassword'];
        $sql="SELECT * FROM user u JOIN customer c ON u.UserId=c.UserId 
        WHERE u.UserName='$UserName' AND u.UserPassword='$UserPassword' LIMIT 1";
    	$result=$conn->query($sql);
        if ($result->num_rows>0) {
            $row=$result->fetch_array();
            session_start();
            $_SESSION['cus_id']=$row['UserId'];
            $_SESSION['cus_name']=$row['CusName'];
            echo json_encode("Success");
        }else{
             echo json_encode("Fail");//echo json_encode($UserName);: becuase type in sign_up as a json
        }
     
    }else{
    	header('location:../signup.php');
    }
 ?> 