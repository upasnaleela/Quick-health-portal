<?php
if(isset($_REQUEST['id']))
{
														$id=$_REQUEST['id'];
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

														$sql= "DELETE login,doctor_info FROM login INNER JOIN doctor_info ON login.email = doctor_info.email where doctor_info.id='".$id."'";
														$result = mysqli_query($conn, $sql);
														$sql2 = "DELETE from doctor_info where id='".$id."'";
														$result1 = mysqli_query($conn, $sql2);
														if($result==true ||$result1==true)
														{
															?>
															<script type="text/javascript">
															window.location="view_doctors.php"
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
														}
														?>
