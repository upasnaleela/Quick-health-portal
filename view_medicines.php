<?php
include 'header.php';
?>
            <!-- === BEGIN CONTENT === -->
			<hr>
			<br/>
			
            <div id="content">
                <div class="container">
                   
                        
                          <b>  <h1 class="margin-bottom-30"><center>View Medicines</center></h2></b>
                            <!-- Accordion -->
                         
                               
                            
                                           
											
											
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

														$sql = "SELECT * from medicine order by title";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
   														 // output data of each row
														echo "<table border='5' cellpadding='20' cellspacing='20'>";
														echo "<tr> <th>&nbsp;&nbsp;Title</th> <th>&nbsp;&nbsp;Company name</th> <th>&nbsp;&nbsp; Price</th> <th>&nbsp;&nbsp;properties</th> <th>&nbsp;&nbsp;Limitation</th> <th>&nbsp; &nbsp; Side Effects </th><th>Image </th></tr>";
    													while($row = mysqli_fetch_assoc($result)) {
	
       																								 echo "<tr><td>&nbsp;";
																									 echo $row['title'];
																									 echo "</td><td width='15%'>&nbsp;";
																									 echo $row['c_name'];
																									 echo "</td><td width='9%'>&nbsp;";
																									 echo $row['price'];
																									 echo "</td><td width='30%'>&nbsp;";
																									 echo $row['properties'];
																									 echo "</td><td width='25%'>&nbsp;";
																							         echo $row['limitation'];
																									 echo "</td><td>&nbsp;";
																									 echo $row['side_effect'];
																									  echo "</td><td width='30%'>&nbsp;";
																									 ?>
                                                                                                    <img src="../../ADMIN/HTML/Images/<?php echo $row['image'];?>" height="50" width="50"/>															<?php
																									 echo "</td></tr>";
																									 }
																							} else {
   																										 echo "0 results";
																								    }
																										echo "</table>";
																										mysqli_close($conn);
																							?>
                                         
                                      
                                
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