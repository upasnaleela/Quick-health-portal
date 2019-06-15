<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quick_health";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$t = $_POST['title'];
$p = $_POST['price'];
$m = $_POST['mdate'];
$e = $_POST['edate'];

$pr = $_POST['properties'];
$s = $_POST['side_effect'];
$l = $_POST['limitation'];
	$g=$_POST['gender'];
	$c = $_POST['disease'];
$cn = $_POST['cname'];
$target = "../../ADMIN/HTML/Images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
$query = "INSERT INTO medicine (title,price,m_date,e_date,properties,limitation,c_disease,c_gender,c_name,image,side_effect) values
('".$t."','".$p."','".$m."','".$e."','".$pr."','".$l."','".$c."','".$g."','".$cn."','".$image."','".$s."')";
$result=mysqli_query($conn,$query);

if($result)
														{
															?>
															<script type="text/javascript">
															window.location="view_medicines.php"
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