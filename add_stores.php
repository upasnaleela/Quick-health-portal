<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick_health";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$name = $_POST['sname'];
$skname = $_POST['skname'];
$addr = $_POST['addr'];
$acode = $_POST['acode'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$query = "INSERT INTO store_info(name,kname,pwd,email,addr,pincode,status) values
('".$name."','".$skname."','".$pwd."','".$email."','".$addr."','".$acode."','store')";
$result = mysqli_query($conn, $query);
$query = "INSERT INTO login(username,password,email,status) values
	('".$skname."','".$pwd."','".$email."','store')";
	$result1=mysqli_query($conn,$query);
if($result==true && $result1==true)
	
														{
															?>
															<script type="text/javascript">
															window.location="view_store.php"
															</script>
															<?php
														}
														else
														{
														?>
														<script type="text/javascript">
														alert("Error");
														</script>
														<?php
														}
														
														
mysqli_close($conn);

?>