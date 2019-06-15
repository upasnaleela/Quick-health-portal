<?php
session_start();

if(!isset($_SESSION['store']))
{
?>
<script type="text/javascript">
window.location="../../USERS/login.php";
</script>
<?php
}
?>
<?php
														
														$id=$_SESSION['id'];
														$email=$_SESSION["email"];
														$servername = "localhost";
														$username = "root";
														$password = "";
														$dbname = "quick_health";

														// Create connection
														$conn = mysqli_connect($servername, $username, $password, $dbname);
														// Check connection
														if (!$conn) {
   																	 die("Connection failed: " . mysqli_connect_error());
																	}

														//$sql= "DELETE login,store_info FROM login INNER JOIN store_info ON login.email = store_info.email";
														//$result = mysqli_query($conn, $sql);
														$sql3 = "DELETE from store_info where email='".$email."'";
														$result2 = mysqli_query($conn, $sql3);
														$sql2 = "DELETE from login where id='".$id."'";
														$result1 = mysqli_query($conn, $sql2);
														if($result1==true && $result2==true)
														{
															?>
															<script type="text/javascript">
															alert("Successful Deregistered..");
															window.location="../../USERS/login.php";
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
														?>
