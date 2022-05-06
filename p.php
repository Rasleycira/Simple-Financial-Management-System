<?php
$con = new mysqli("localhost","root","","financial");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$total = 0;
$update = false;
$id=0;
$pay = '';
$balance = '';

    if(isset($_POST['save'])){
        
		
        $pay = $_POST['pay'];

        $query = mysqli_query($con, "INSERT INTO salary (pay) VALUE ('$pay')"); 
        
        $_SESSION['massage'] = "Recode has been saved !";
        $_SESSION['msg_type'] = "primary";

        header("location: pay.php?result=true");
        

    }
	$result = mysqli_query($con, "SELECT * FROM salary");
    while($row = $result->fetch_assoc()){
        $balance = $balance + $row['pay'];
    }
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $query = mysqli_query($con, "DELETE FROM salary WHERE id=$id");
        $_SESSION['massage'] = "Recode has been Delete !";
        $_SESSION['msg_type'] = "danger";

        header("location: pay.php");

    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($con, "SELECT * FROM salary WHERE id=$id");

      
        if( mysqli_num_rows($result) == 1){
            $row = $result->fetch_assoc();
            $pay = $row['pay'];
        }
    
    }


    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $pay = $_POST['pay'];

        $query = mysqli_query($con, "UPDATE salary SET name='$pay' WHERE id='$id'");
        $_SESSION['massage'] = "Recode has been Update !";
        $_SESSION['msg_type'] = "success";
        header("location: index.php");
    }



?>

