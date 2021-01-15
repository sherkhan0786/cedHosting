<?php include 'header.php' ?>

		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form> 
				 <div class="register-top-grid">
					<h3>Email Verification</h3>
					 
					 <div>
						 <span>EMAIL ADDRESS<label>*</label></span>
						 <input id='email' type="text"> 
					 </div>

						
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
					 
				<div class="clearfix"> </div>
				<div class="register-but">
				   
					   <input id='emailVerify' onclick='mailVerify()' type="button" value="Verify" data-toggle="modal" data-target="#myModal">
					   <div class="clearfix"> </div>
				   
				</div>
				     
				</form>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- Modal -->
<div class="container">
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <a class="navbar-brand" href="index.php">Email Verification</a>

                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body" id="display">
              <form action="emailVerifyOtp.php" method='post' id="myotp">
                <h2>verify OTP</h2>
                <label for="verify">Verify Email</label>
                <input type="number" name="verify" id="verify" placeholder="Enter OTP">
                <br><br>
                <button class="btn btn-danger" type="submit" name='verifyotp' value="verify an email">Submit</button>
              </form>
              </div>
              <div class="modal-footer">
              
              </div>
            </div>
            
          </div>
        </div>
        
      </div>

<?php include 'footer.php' ?>



<script>
	function mailVerify(){
		var email = $('#email');
		if(isNotEmpty(email)){
            $.ajax({
                url:'emailVerify.php',
                method:"POST",
                data: {
                    email:email.val(),
                },
                success: function(response){
					// console.log(data);
                }
            });
        }
    }

    function isNotEmpty(caller){
        if(caller.val() == ""){
            caller.css('border', '1px solid red');
            return false;
        }
        else{
            caller.css('border', '');
            return true;
        }
    }
	
</script>