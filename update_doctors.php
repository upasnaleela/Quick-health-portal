<?php
include 'header.php';
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

														$sql = "SELECT * from doctor_info where email='".$email."'";
														$result = mysqli_query($conn, $sql);
													
    													while($row = mysqli_fetch_assoc($result)) {
														
	
	?>
	
	<div id="content"> 
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="#" method="post" enctype="multipart/form-data">
                                <div class="signup-header">
                                    <h2><center>Update Doctor Information </center></h2>
                              </div>
                               <label><b>Name</b></label>
                                <input class="form-control margin-bottom-20" type="text" name="name" value="<?php echo $row['name'];?>" required>
                                <label><b>Birth date</b></label>
                                <input class="form-control margin-bottom-20" type="date" name="bdate" value="<?php echo $row['bdate'];?>" required>
								 <label><b>Speciality</b></label>&nbsp; &nbsp; &nbsp; &nbsp;
								 <select name="speciality">
								 	<option value="optical">Optical</option>
									<option value="Aural">Aural</option>
									<option value="Dental">Dental</option>
								</select><br>
								<br/>
								 <label><b>Email Id</b></label>
                                <input class="form-control margin-bottom-20" type="email" name="email" value="<?php echo $row['email'];?>" required>
								 <label><b>Password</b></label>
                                <input class="form-control margin-bottom-20" type="text" name="pwd" value="<?php echo $row['pwd'];?>" required>
								 <label><b>Contact No</b></label>
                                <input class="form-control margin-bottom-20" type="number" name="con" value="<?php echo $row['con'];?>" required>
                                <label><b>Image</b></label>
                                <input type="file" name="image" value="<?php echo $row['image'];?>" required/>
								  <label><b>About</b> </label>
                            <textarea cols="30" rows="5" class="form-control margin-bottom-20" name="about" value="<?php echo $row['about'];?>" required></textarea>
							
								<center><input type="submit" value="update" style="width:50%" name="btnupdate"></center>
                             </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
	
	
	
	<?php
																										}
																								
																							?>
                                         
                                      
                                
                              <hr>
							  <br/>
						
</div>
                    </div>
                </div>
            </div>
           
<?php
if(isset($_POST['btnupdate']))
{
$name = $_POST['name'];
$bd = $_POST['bdate'];
$sp = $_POST['speciality'];
$eid = $_POST['email'];
$con = $_POST['con'];
$pwd=$_POST['pwd'];
$about = $_POST['about'];
$target = "../../ADMIN/HTML/Images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
$sql = "delete from login where id='".$id."'";
														$result = mysqli_query($conn, $sql);
	$sql1 = "update doctor_info set name='".$name."',bdate='".$bd."',pwd='".$pwd."',speciality='".$sp."',email='".$eid."',con='".$con."',about='".$about."',image='".$image."' where email='".$email."'";
														$result1 = mysqli_query($conn, $sql1);
														$query = "INSERT INTO login(username,password,email,status) values
	('".$name."','".$pwd."','".$eid."','doctor')";
	$result2=mysqli_query($conn,$query);
														if($result)
														{
														  $_SESSION["email"]= $eid;
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
														}
												
		mysqli_close($conn);
?>

<?php
include 'footer.php';
?>