<?php
include "conn.php";
if(!isset($_SESSION["username"]))
	
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <center><h2 style="background-color:ForestGreen;">Financial Management System</h2></center>
    
    <br><br><br>
	
	<div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a a href="logout.php";" class="profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                               <?php echo $_SESSION["username"];?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li> <a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
   

                  
                    </ul>
                </nav>
            </div>
        </div><meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<Right>
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
     <a href="index.php">Expenses</a> 
    <a href="pay.php">Salary</a>
     <a href="calculator.php">Calculator</a>
	      <a href="reset-password.php">Reset Password</a>

	</Right
  </div>
</div>
					
                    </table>
					</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
			
                <h2 class="text-center">Add Expense</h2>
                <hr><br>
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="budgetTitle">Title</label>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="text" name="budget" class="form-control" id="budgetTitle" placeholder="Enter Title" required autocomplete="off"  value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required  value="<?php echo $amount; ?>">
                    </div>
					
                    <?php if($update == true): ?>
                    <button type="submit" name="update" class="btn btn-success btn-block">Update</button>
                    <?php else: ?>
                    <button type="submit" name="save" class="btn btn-primary btn-block" style="background-color:ForestGreen;">Save</button>
                    <?php endif; ?>
                </form>
			
              
            </div>
            <div class="col-md-8">
                <h2 class="text-center">Total Expenses : Ksh <?php echo $total;?></h2>
                <hr>
                <br><br>

                <?php 

                    if(isset($_SESSION['massage'])){
                        echo    "<div class='alert alert-{$_SESSION['msg_type']} alert-dismissible fade show ' role='alert'>
                                    <strong> {$_SESSION['massage']} </storng>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                ";
                    }

                ?>
                <h2>Expenses List</h2>

                <?php 
                    
                    $result = mysqli_query($con, "SELECT * FROM budget");
                ?>
                <div class="row justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Budget Name</th>
                                <th>Budget Amount</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php 
                            while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td> ksh <?php echo $row['amount']; ?></td>
                                <td>
                                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-success" style="background-color:Chocolate;">Update</a>
                                    <a href="process.php?delete=<?php echo $row['id']; ?>"  class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endwhile ?>
                    </table>
					<br><br>
					<div class="container">
        <div class="row">
            <div class="col-md-4">
					               </div>
            </div>
        </div>
    </div>
       <a href="print.php" target="_blank" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print</a>   
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
<footer>
      <footer style="background-color:lightgreen;">
        </footer>
</html>

