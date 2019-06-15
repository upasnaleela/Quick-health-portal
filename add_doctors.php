<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick_health";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$name = $_POST['name'];
$bd = $_POST['bdate'];
$sp = $_POST['speciality'];
$eid = $_POST['email'];
$con = $_POST['con'];
$pwd=$_POST['pwd'];
$about = $_POST['about'];
$target = "Images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
	$query = "INSERT INTO doctor_info(name,email,con,bdate,speciality,image,about,pwd,status) values
	('".$name."','".$eid."','".$con."','".$bd."','".$sp."','".$image."','".$about."','".$pwd."','doctor')";
	$result=mysqli_query($conn,$query);
	$query1 = "INSERT INTO login(username,password,email,status) values
	('".$name."','".$pwd."','".$eid."','doctor')";
	$result1=mysqli_query($conn,$query1);
	if($result==true && $result1==true)
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
mysqli_close($conn);
?>