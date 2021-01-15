<?php 
	session_start();
?>
<?php include 'header.php' ?>

		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form action='signupInsertDb.php' method='post'> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>NAME<label>*</label></span>
						<input name='name' type="text"> 
					 </div>
					 <div>
						 <span>EMAIL ADDRESS<label>*</label></span>
						 <input name='email' type="text" value=<?php if(isset($_SESSION['uEmail'])){ echo $_SESSION['uEmail']; } ?> > 
					 </div>
					 <div>
						<span>SECURITY QUESTION<label>*</label></span>
						<select name="ques" id="ques">
							<option value="0">please select security question</option>
							<option value="0">what was your childhood name</option>
							<option value="0">what was name of your childhood best friend</option>
							<option value="0">what was your favrite place as a child</option>
							<option value="0">what was your dream job as a child</option>
							<option value="0">what was your favrite teacher nickname</option>
						</select>
					</div>
					<div>
						<span>ANSWER<label>*</label></span>
						<input name='ans' type="text"> 
					</div>
					 <div>
						 <span>MOBILE(MINIMUM 10 DIGIT REQUIRED)<label>*</label></span>
						 <input name='mobile' type="text" value=<?php if(isset($_SESSION['uMob'])){ echo $_SESSION['uMob']; } ?>> 
					</div>
						
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
					 
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input name='password' type="password">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input name='confpass' type="password">
							 </div>
					 </div>
					 <div class="clearfix"> </div>
					 <div class="register-but">
						
							<input name='submit' type="submit" value="submit">
							<div class="clearfix"> </div>
				</form>
				   
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->


<?php include 'footer.php' ?>
<?php //session_destroy(); ?>

