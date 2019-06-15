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

														$sql = "SELECT * from medicine where id='".$id."'";
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
                                    <h2><center>Update Medicine </center></h2>
                              </div>
                                <label>Title </label>
                                <input class="form-control margin-bottom-20" name="title" type="text" value="<?php echo $row['title'];?>" required>
                                <label>Company Name</label>
                                <input class="form-control margin-bottom-20" name="cname" type="text" value="<?php echo $row['c_name'];?>" required>
                                <label>Price</label>
                                <input class="form-control margin-bottom-20" name="price"type="number" value="<?php echo $row['price'];?>" required>
								 <label>Image</label>
                                <input type="file" name="image" value="<?php echo $row['image'];?>"/>
								  <label>Manufacturing date</label>
                                <input class="form-control margin-bottom-20"  name="mdate" type="date" value="<?php echo $row['m_date'];?>" required><br>
								  <label>Expiry date</label>
                                <input class="form-control margin-bottom-20" name="edate" type="date" value="<?php echo $row['e_date'];?>" required><br>
								
                               		Applicable To <select name="gender">
                               			<option>Male</option>
                               			<option>Female</option>
                               			<option>Child</option>
										<option>All</option>
                               		</select>
                               		<br>
                               		<label>Disease</label>
                                <input class="form-control margin-bottom-20" name="disease" type="text" value="<?php echo $row['c_disease'];?>" required>


								 <label>Properties</label>
								 <textarea class="form-control margin-bottom-20" name="properties" value="<?php echo $row['properties'];?>" required></textarea>
								  <label>Limitation </label>
								 <textarea class="form-control margin-bottom-20" name="limitation" value="<?php echo $row['limitation'];?>" required></textarea>
                   <label>Side Effect</label>
                 <textarea class="form-control margin-bottom-20" name="side_effect" value="<?php echo $row['side_effect'];?>" required></textarea>
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
	$sql = "update medicine set title='".$t."',price='".$p."',m_date='".$m."',e_date='".$e."',properties='".$pr."',limitation='".$l."',c_disease='".$c."',c_gender='".$g."',c_name='".$cn."',image='".$image."',side_effect='".$s."' where id='".$id."'";
														$result = mysqli_query($conn, $sql);
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
												}
														?>
<?php

		mysqli_close($conn);
?>

<?php
include 'footer.php';
?>