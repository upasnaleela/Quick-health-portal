<?php
include 'header.php';
?>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="add_medicines.php" method="post" enctype="multipart/form-data">
                                <div class="signup-header">
                                    <h2><center>Register New Medicine</center> </h2>
                              </div>
                                <label>Title </label>
                                <input class="form-control margin-bottom-20" name="title" type="text" required>
                                <label>Company Name</label>
                                <input class="form-control margin-bottom-20" name="cname" type="text" required>
                                <label>Price</label>
                                <input class="form-control margin-bottom-20" name="price"type="number" required>
								 <label>Image</label>
                                <input type="file" name="image" required />
                                  
                              <br><br>
								  <label>Manufacturing date</label>
                                <input class="form-control margin-bottom-20"  name="mdate" type="date" required><br>
								  <label>Expiry date</label>
                                <input class="form-control margin-bottom-20" name="edate" type="date" required><br>
								
                               		Applicable To <select name="gender">
                               			<option>Male</option>
                               			<option>Female</option>
                               			<option>All</option>
                               			<option>Child</option>
                               		</select>
                               		<br>
                               		<label>Disease</label>
                                <input class="form-control margin-bottom-20" name="disease" type="text" required>


								 <label>Properties</label>
								 <textarea class="form-control margin-bottom-20" name="properties" required></textarea>
								  <label>Limitation </label>
								 <textarea class="form-control margin-bottom-20" name="limitation" required></textarea>
                   <label>Side Effect</label>
                 <textarea class="form-control margin-bottom-20" name="side_effect" required></textarea>
								 
								 
								
								<center><input type="submit" value="Submit" style="width:50%"></center>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <?
			include 'footer.php';
			?>