<?php
include 'header.php';
?>
<hr>
<br/>
	<div id="content">
    <div class="container">
     <b>  <h1 class="margin-bottom-30"><center>View Stores</center></h2></b>
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
														echo "<center><table border='5' cellpadding='20' cellspacing='20'>";
														echo "<tr> <th>&nbsp;&nbsp;Name</th> <th>&nbsp;&nbsp;Store Keeper Name</th><th>Email Id</th><th>Password</th> <th>&nbsp;&nbsp; Address</th> <th>&nbsp;&nbsp;Pincode</th> </tr>";
    													while($row = mysqli_fetch_assoc($result)) {
	
       																								 echo "<tr><td>&nbsp;";
																									 echo $row['name'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['kname'];
																									 echo "</td><td>&nbsp;";
																									  echo $row['email'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['pwd'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['addr'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['pincode'];
																									 echo "</td></tr>";
																									 }
																							
																										echo "</table></center>";
																										mysqli_close($conn);
																							?>
                                         
                                      
                                
                              <hr>
							  <br/>
							  <br/>
                        
</div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
          <?php
		  include 'footer.php';
		  ?>