<?php
include 'header.php';
?>
            <!-- === BEGIN CONTENT === -->
			<hr>
			<br/>
			
            <div id="content">
                <div class="container">
				   <b>  <h1 class="margin-bottom-30">
                          <p><center>Delete a Doctor</center>
                            </h2>
                            </b>
							<?php
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

														$sql = "SELECT * from doctor_info order by name";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
   														 // output data of each row
													echo "<center><table border='5' cellpadding='20' cellspacing='20'>";
														echo "<tr> <th>&nbsp;&nbsp;Name</th> <th>&nbsp;&nbsp;Email</th> <th>&nbsp;&nbsp; Contact No</th> <th>&nbsp;&nbsp;Birth Date</th><th>Speciality</th><th>About</th><th>Image</th><th>Delete It</th> </tr>";
    													while($row = mysqli_fetch_assoc($result)) {
	
       																								  echo "<tr><td>&nbsp;";
																									 echo $row['name'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['email'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['con'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['bdate'];
																									  echo "</td><td>&nbsp;";
																									 echo $row['speciality'];
																									  echo "</td><td>&nbsp;";
																									 echo $row['about'];
																									   echo "</td><td width='30%'>&nbsp;";
																									 ?>
                                                                                                    <img src="Images/<?php echo $row['image'];?>" height="50" width="50"/>															<?php
																									 echo "</td><td>";
																									 ?>
																									 <a href="delete_doctors.php?id=<?php echo $row['id'];?>">Delete </a>
																									 </tr>
                  </p>
                          <p>
                            <?php
																									  }
																							} else {
   																										 echo "0 results";
																								    }
																										echo "</table>";
																										mysqli_close($conn);
																							?>
                            
                            
                            
                                  </p>
                          <hr>
							  <br/>
							  <br/>
                            <!-- End Accordion -->
                          
                            <!-- Accordion - Alternative -->
                            <!-- End Accordion - Alternative --><!-- Tab v1 -->
                            <!-- End Tab v1 --><!-- Tab v2 -->
                            <!-- End Tab v2 --><!-- Tab v3 -->
                            <!-- Tab v3 -->
</div>
          </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
          <?php
include 'footer.php';
?>