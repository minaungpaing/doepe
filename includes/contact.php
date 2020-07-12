<?php include 'header.php'; ?>
	<!-- header -->
			<div class="collapse navbar-collapse" id="navbarsExample05">
				<ul class="navbar-nav ml-auto">
				  	<li class="nav-item">
				    	<a class="nav-link" href="../index.php" >Home</a>
				  	</li>
				  	<li class="nav-item">
				   		<a class="nav-link" href="package.php">Packages</a>
				  	</li>
				  	<li class="nav-item dropdown">
				    	<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
				        <div class="dropdown-menu" aria-labelledby="dropdown05">
				          <a class="dropdown-item" href="flight.php">Flight Ticket</a>
				          <a class="dropdown-item" href="#">Bus Ticket</a>
				        </div>
				  	</li>
				  	<li class="nav-item">
				   		<a class="nav-link" href="about.php">About</a>
				  	</li>
				  	<li class="nav-item">
				   		<a class="nav-link" href="contact.php" id="act">Contact</a>
				    </li>		          	
				</ul>
		        <form class="form-inline my-2 my-md-0">
		          	<button class="btn btn-md" id="button">Book Now</button>
		        </form>
		      	</div>
		    </div>
    	</nav>	   
	</header>

	<!-- header -->
	<div class="c_banner"></div>
	<div style="height: 30px;"></div>
	<div class="container" id="contact">
		<h1>Contact Us</h1>
		<div class="content-contact">
			Please enter booking information below to complete your reservation.<br><br>
			<div class="row">					
				<div class="col-lg-12 col-md-12 col-sm-12">	
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5">
							<div>
								<form name="form1" id="form1" method="post">
									<div class="form-group">
										<label for="name" class="control-label">Name<b><span class="sp-contact">*</span></b></label>
										<input type="text" class="form-control" id="" name="name">
										<p id="err-name" class="message-error message-general" style="color: red;font-size:12px;"></p>
									</div>
									<div class="form-group">
										<label for="country" class="control-label">Country<b><span class="sp-contact">*</span></b></label>
										<select class="form-control" name="country">
										<option selected="selected">Select One</option>
										<option>Myanmar</option>
										<option>Cambodia</option>
										<option>liaos</option>
										<option>Thai</option>
										</select>
									</div>
									<div class="form-group">
										<label for="email" class="control-label">Email<b><span class="sp-contact">*</span></b></label>
										<input type="email" class="form-control" id="" name="email">
									</div>
									<div class="form-group">
										<label for="telephone" class="control-label">Telephone</label>
										<input type="text" class="form-control" id="" name="phone">
									</div>
									<div class="form-group">
										<label for="subject" class="control-label">Subject<b><span class="sp-contact">*</span></b></label>
										<select class="form-control" name="subject">
											<option value="Short Trips">Short Trips</option>
											<option value="Package Tours">Package Tours</option>
											<option value="Customized Tours">Customized Tours</option>
											<option value="Hotel Reservations">Hotel Reservations</option>
											<option value="Ballooning">Ballooning</option>
											<option value="River Cruises">River Cruises</option>
											<option value="Car Rentals">Car Rentals</option>
											<option value="Flight Tickets">Flight Tickets</option>
											<option value="Bus Tickets">Bus Tickets</option>
											<option value="Other Enquiries">Other Enquiries</option>
										</select>
									</div>
									<div class="form-group">
										<label for="message" class="control-label">Message<b><span class="sp-contact">*</span></b><br>
									<span style="font-weight: 400; color: #333;">(maximum = 300 characters)</span></label>
										<textarea class="form-control" rows="6" placeholder="Please Type Your Message..." name="message"></textarea>
									</div>
									<div class="form-group">
										<a><button class="btn btn-lg"id="search">Send Message</button></a>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7">
							<div id="map" width="100%" height="400" frameborder="0" style="border:0"></div>

							<script>
								function initMap() {
									var location = {lat: 16.871976, lng: 96.152109};
									var map = new google.maps.Map(document.getElementById("map"), {
										zoom: 4,
										center: location
									});

									var marker = new google.maps.Marker({
										position: location,
										map: map
									})
								}
								
							</script>
							  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnwEXn_AfcKkTGx4844dzaMj81Pyh8xrg&callback=initMap" type="text/javascript"></script>
							  <script src="http://somemapprodcutaddress.js" key="AIzaSyCnwEXn_AfcKkTGx4844dzaMj81Pyh8xrg"> </script>


							<h2 style="margin-top: 10px;" class="header-info">Contact Information</h2>
							<p>
								Address: No.124/126, 50th Street, Pazundaung Township, Yangon, Myanmar (Burma).
								<br>
								Tel: 95-1-226779, 225569 
								<br>
								Email: <a href="mailto:doepe@gmail.com">doepetravel@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="height: 30px;"></div>
<?php include 'footer.php'; ?>