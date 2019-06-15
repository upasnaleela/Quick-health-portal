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

														$sql = "SELECT * from news_info where id='".$id."'";
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
                                    <h2><center>Update News Information </center></h2>
                              </div>
                               <label><b>Title</b></label>
                                <input class="form-control margin-bottom-20" type="text" name="title" value="<?php echo $row['title'];?>" required>
                               <label><b>Description</b></label>
                            <textarea cols="30" rows="5" class="form-control margin-bottom-20" name="desc" value="<?php echo $row['description'];?>" required></textarea>
							<label><b>Image</b></label>
							<input type="file" name="image" required />
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
$d = $_POST['desc'];

$target = "../../ADMIN/HTML/Images/".basename($_FILES['image']['name']);
$image=$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{

	$sql = "update news_info set title='".$t."',description='".$d."',image='".$image."' where id='".$id."'";
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
														}
												
		mysqli_close($conn);
?>

<?php
include 'footer.php';
?>