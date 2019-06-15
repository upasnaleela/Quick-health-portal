<?php
include 'header.php';
?>            <!-- === BEGIN CONTENT === -->
      
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="add_newses.php" enctype="multipart/form-data" method="post">
                                <div class="signup-header">
                                    <h2><center>Add news</center> </h2>
                              </div>
                                <label>News Title</label>
                                <input class="form-control margin-bottom-20" type="text" name="title" required>
								
								 <label>Description </label>
								 <textarea class="form-control margin-bottom-20" name="desc" required></textarea>
								  
								    <label>Image</label>
									<input type="file" name="image" class="form-control margin-bottom-20" name="image" required/>
                                
								  <center> <input type="submit" value="Submit" style="width:50%"></center>
								  </form>
								 
								 
                              
								
							
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <?php
include 'footer.php';
?>            <!-- === BEGIN CONTENT === -->
      
<!-- === END FOOTER === -->