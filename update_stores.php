<?php
include 'header.php';
?>

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

														$sql = "SELECT * from store_info where id='".$id."'";
														$result = mysqli_query($conn, $sql);
													
    													while($row = mysqli_fetch_assoc($result)) {
														$eid=$row['email'];
	
	?>
	
	<div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="#" method="post">
                                <div class="signup-header">
                                    <h2><center>Update Store Information</center> </h2>
                              </div>
                                <label>Name</label>
                                <input class="form-control margin-bottom-20" name="name" type="text" value="<?php echo $row['name'];?>" required>
                                <label>Store Keeper Name</label>
                                <input class="form-control margin-bottom-20" name="kname" type="text" value="<?php echo $row['kname'];?>" required>
								 <label>Email Id</label>
                                <input class="form-control margin-bottom-20" name="email" type="email" value="<?php echo $row['email'];?>" required>
								<label>Password</label>
                                <input class="form-control margin-bottom-20" name="pwd" type="text" value="<?php echo $row['pwd'];?>" required>
                                <label>Address</label>
                                <input class="form-control margin-bottom-20" name="addr" type="text" value="<?php echo $row['addr'];?>" required>
								 <label>Pincode</label>
                                <input class="form-control margin-bottom-20" name="acode" type="number" value="<?php echo $row['pincode'];?>" required>
								
								<center><input type="submit" value="update" style="width:50%" name="btnupdate"></center>
                             </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
	
	
	
	<?php
																										}
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
$n = $_POST['name'];
$kn = $_POST['kname'];
$a = $_POST['addr'];
$ac = $_POST['acode'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$sql = "delete from login where email='".$eid."'";
														$result = mysqli_query($conn, $sql);
$sql1 = "update store_info set name='".$n."',kname='".$kn."',email='".$email."',pwd='".$pwd."',addr='".$a."',pincode='".$ac."' where id='".$id."'";
														$result1 = mysqli_query($conn, $sql1);
$query = "INSERT INTO login(username,password,email,status) values
	('".$n."','".$pwd."','".$email."','store_keeper')";
	$result2=mysqli_query($conn,$query);
														

														if($result2)
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
														}
														?>
<?php

		mysqli_close($conn);
?>

<?php
include 'footer.php';
?>