<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick_health";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$t = $_POST['title'];
$d = $_POST['desc'];
$date=date("Y/m/d");
$target = "Images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
$query = "INSERT INTO news_info (title,description,date,bywhom,image) values
('".$t."','".$d."','".$date."','admin','".$image."')";
$result=mysqli_query($conn,$query);

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
mysqli_close($conn);
?>