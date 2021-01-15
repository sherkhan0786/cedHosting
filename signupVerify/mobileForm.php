<?php include 'header.php' ?>

		<!---login--->
			<div class="content">
				<!-- registration -->
				<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form> 
				 <div class="register-top-grid">
					<h3>Mobile Verification</h3>
					 
					 <div>
						 <span>MOBILE NUMBER<label>*</label></span>
						 <input id='mob' type="text"> 
					 </div>

						
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
					 
				<div class="clearfix"> </div>
				<div class="register-but">
				   
					   <input id='mobileVerify' onclick='mobVerify()' type="button" value="Verify" data-toggle="modal" data-target="#myModal">
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
              <a class="navbar-brand" href="index.php">Mobile Verification</a>

                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body" id="display">
              <form action="mobileVerifyOtp.php" method='post' id="myotp">
                <h2>Mobile OTP</h2>
                <label for="verify">Verify Mobile</label>
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
	function mobVerify(){
		var mob = $('#mob');
		if(isNotEmpty(mob)){
			$.ajax({
				url:'mobileVerify.php',
				method:'POST',
				data:{
					mob:mob.val(),
				},
				success:function(response){

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