<?php
include 'header.php';
?>            <!-- === BEGIN CONTENT === -->
      
        
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                         <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="signup-page" action="add_stores.php" method="post">
                                <div class="signup-header">
                                    <h2><center>Register New store</center></h2>
                              </div>
                                <label>Store Name</label>
                                <input class="form-control margin-bottom-20" type="text" name="sname" required>
                                <label>Store Keeper Name</label>
                             <input class="form-control margin-bottom-20" type="text" name="skname" required>
							  <label>Email</label>
                             <input class="form-control margin-bottom-20" type="email" name="email" required>
							   <label>Password</label>
                             <input class="form-control margin-bottom-20" type="pwd" name="pwd" required>
							  <label>Address</label>
                              <textarea class="form-control margin-bottom-20" name="addr" required></textarea><br>
								   <label>Area pin code</label>
                                <input class="form-control margin-bottom-20" type="number" name="acode" required>
								<center><input type="submit" value="Submit" style="width:50%"></center>
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