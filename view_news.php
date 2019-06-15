<?php
include 'header.php';
?>
<hr>
<br/>
	<div id="content">
    <div class="container">
     <b>  <h1 class="margin-bottom-30"><center>View News</center></h2></b>
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

														$sql = "SELECT * from news_info order by title";
														$result = mysqli_query($conn, $sql);
														echo "<center><table border='5' cellpadding='20' cellspacing='20'>";
														echo "<tr> <th>&nbsp;&nbsp;Title</th> <th>&nbsp;&nbsp;Description</th>  <th>&nbsp;&nbsp;Date</th><th>By whom</th><th>&nbsp;&nbsp; Image</th> </tr>";
    													while($row = mysqli_fetch_assoc($result)) {
	
       																								 echo "<tr><td>&nbsp;";
																									 echo $row['title'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['description'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['date'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['bywhom'];
																									echo "</td><td width='20%'>&nbsp;";
																									?>
                                                                                                    <img src="Images/<?php echo $row['image'];?>" height="50" width="50"/>															<?php
				
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