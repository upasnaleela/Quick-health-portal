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

														$sql = "delete from news_info where id='".$id."'";
														$result = mysqli_query($conn, $sql);
														if($result)
														{
															?>
															<script type="text/javascript">
															window.location="view_news.php"
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
