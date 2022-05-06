<?php
include "p.php";
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
    <a href="pay.php">salary</a>
	<a href="calculator.php">Calculator</a>
    
	</Right>
  </div>
</div>
	
					
					<form> 
					
				
<th>	
<h4><center>Manual calculation</h4>				
<center>		
<h1>	
Salary: <br> 
<input type="text" placeholder="Salary" name="balance" value="<?php echo $balance;?>"  required=""/></br>

Expenses: <br>
<input type="text" placeholder="Expenses" name="total" value="<?php echo $total;?>"  required=""/></br>
<center><input  type="submit" style="background-color:ForestGreen;" name="submit" value="Subtract"><center>
  
</form>  
 <br>
<?php  
      
@$balance=$_GET['balance'];   
@$total=$_GET['total'];  
for ($i=1; $i<=$total; $i++)     
{      
 $balance--;      
}     
echo
"Balance Amount is ksh".$balance;  
?>  
 <body>               </div>
            </div>
        </div>
    </div>
	<br><br><br>
	<div>
  <form method="post" action="calculator.php">
         <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
         <select name="operation">
         <option value="plus">Plus</option>
             <option value="multiply">Multiply</option>
             <option value="divided by">Divide</option>
         </select>
         <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
         <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
     </form>
     
 </div>	
 <?php
 
 if(isset($_POST['submit']))
 {
 if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
 {

 if($_POST['operation'] == 'plus')
 {
 $total = $_POST['number1'] + $_POST['number2']; 
 }
 if($_POST['operation'] == 'multiply')
 {
 $total = $_POST['number1'] * $_POST['number2']; 
 }
 if($_POST['operation'] == 'divided by')
 {
 $total = $_POST['number1'] / $_POST['number2']; 
 }
 echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
 
 } else {
 
 echo 'Numeric values are required';
 
 }
 }

 ?>
     
   
	 
	 
	 
   