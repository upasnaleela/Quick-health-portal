<?php
include 'header.php';
?>            <!-- === BEGIN CONTENT === -->
<div id="content">
  <div class="container background-white">
    <div class="row margin-vert-30">
      <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
          <form class="signup-page" method="post" action="add_doctors.php" enctype="multipart/form-data">
            <div class="signup-header">
              <h2><center>Register a Doctor</center> </h2>
             </div>
              <label><b>Name</b></label>
              <input class="form-control margin-bottom-20" type="text" name="name" required>
			   <label><b>Password</b></label>
              <input class="form-control margin-bottom-20" type="text" name="pwd" required>
              <label><b>Birth date</b></label>
              <input class="form-control margin-bottom-20" type="date" name="bdate" required>
			  <label><b>Speciality</b></label>&nbsp; &nbsp; &nbsp; &nbsp;
			  <select name="speciality">
				<option value="optical">Optical</option>
				<option value="Aural">Aural</option>
				<option value="Dental">Dental</option>
			  </select>
			  <br>
			  <br/>
			  <label><b>Email Id</b></label>
              <input class="form-control margin-bottom-20" type="email" name="email" required>
			  <label><b>Contact No</b></label>
              <input class="form-control margin-bottom-20" type="number" name="con" required>
              <label><b>Image</b></label>
              <input type="file" name="image" required/>
			  <label><b>About</b> </label>
              <textarea cols="30" rows="5" class="form-control margin-bottom-20" name="about" required></textarea>
			  <center><input type="submit" value="Submit" style="width:50%"></center>
            </form>
          </div>
         </div>
        </div>
       </div>
<?php
include 'footer.php';
?>  
<!-- === END FOOTER === -->