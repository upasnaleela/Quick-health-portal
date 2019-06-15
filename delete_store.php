<?php
include 'header.php';
?>
            <!-- === BEGIN CONTENT === -->
			<hr>
			<br/>
			
            <div id="content">
                <div class="container">
				   <b>  <h1 class="margin-bottom-30">
                          <p><center>Delete Store</center>
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

														$sql = "SELECT * from store_info order by name";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
   														 // output data of each row
														echo "<table border='5' cellpadding='20' cellspacing='20'>";
														echo "<tr> <th>&nbsp;&nbsp;Name </th> <th>&nbsp;&nbsp;Store Keeper Name</th><th>Email</th> <th>&nbsp;&nbsp; Address</th> <th>&nbsp;&nbsp;Pincode</th><th>Delete it</th></tr>";
    													while($row = mysqli_fetch_assoc($result)) {
	
       																								 echo "<tr><td>&nbsp;";
																									 echo $row['name'];
																									 echo "</td><td width='15%'>&nbsp;";
																									 echo $row['kname'];
																									 echo "</td><td width='9%'>&nbsp;";
																									 echo $row['email'];
																									 echo "</td><td width='9%'>&nbsp;";
																									 echo $row['addr'];
																									 echo "</td><td width='30%'>&nbsp;";
																									 echo $row['pincode'];																									
																									 echo "</td><td>";
																									 ?>
																									 <a href="delete_stores.php?id=<?php echo $row['id'];?>">Delete </a>
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