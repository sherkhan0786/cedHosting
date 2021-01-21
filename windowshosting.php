<?php //include 'adminDash/products/Product.php' ?>

<?php include 'header.php' ?>
 
 <?php
	$id = $_GET['id'];
	// echo $id;

	$myObj = new Product();

	$d1 = $myObj->selectDescQuery();
	// echo "<pre>";
	// print_r($d1);
	// echo "</pre>";

 ?>

	<!---header--->

		<!---singleblog--->
				<div class="content">
					<div class="linux-section">
						<div class="container">
							<div class="linux-grids">
								<div class="col-md-8 linux-grid">
								<h2>Windows Hosting</h2>
								<ul>
									<li>Disk Space, Bandwidth and Email Addresses</li>
									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>
									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>
									<li><span>30 day </span> Money Back Guarantee</li>
								</ul>
									<a href="#">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
									<img src="images/window.png" class="img-responsive" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="linux-prices">
											


												<?php
													foreach($d1 as $key1=>$val1){
														$decode1 = json_decode($val1['description'], true);
														if($val1['prod_id']==$id ){
														echo "
														<div class='col-md-3 linux-price'>
														<div class='linux-top'>
														<h4>Standard</h4>
														</div>
														<div class='linux-bottom'>
															<h5>"  .$val1['mon_price']. "₹.<span class='month'>per month</span></h5>
															<h5>"  .$val1['annual_price']. "₹.<span class='month'>per year</span></h5>
															<h6>Single Domain</h6>
															<ul>
															<li><strong>".$decode1['webSpace']."GB</strong> Web Space</li>
															<li><strong>".$decode1['bandwidth']."GB</strong> Bandwidth</li>
															<li><strong>".$decode1['mailbox']."</strong> Mailbox</li>
															<li><strong>".$decode1['domain']."</strong> Free Domain</li>
															<li><strong>".$decode1['support']."</strong> Language/Technology</li>
															<li><strong>".$decode1['mailbox']."</strong> Mailbox</li>
															<li><strong>location</strong> : <img src='images/india.png'></li>
															</ul>
															</div>
															<a data-id=".$val1['id']." class='addToCart'>buy now</a>
															</div>";
														}
													}
												
												?>
											</div>

											
											<div class="clearfix"></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
	<div id="display"></div>
					<!-- clients -->
				<div class="clients">
					<div class="container">
						<h3>Some of our satisfied clients include...</h3>
						<ul>
							<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
							<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
							<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
							<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
						</ul>
					</div>
				</div>
       <!-- clients -->
					<div class="whatdo">
						<div class="container">
							<h3>Windows Features</h3>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>
			
<?php include 'footer.php' ?>


<script>
	$(document).ready(function(){
		$('.addToCart').click(function(){
			var buyId = $(this).data('id');
			console.log(buyId);
			$.ajax({
				url:'addToCart.php',
				method:'POST',
				data:{buyId:buyId},
				success:function(data){
					$('#display').html(data);
					alert("product added to cart");
				}
			})
		})
	}) 
</script>


