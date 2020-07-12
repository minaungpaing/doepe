<?php include 'header.php' ?>
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
				          <a class="dropdown-item" href="flight.php" id="act">Flight Ticket</a>
				          <a class="dropdown-item" href="#">Bus Ticket </a>
				        </div>
				  	</li>
				  	<li class="nav-item">
				   		<a class="nav-link" href="about.php">About</a>
				  	</li>
				  	<li class="nav-item">
				   		<a class="nav-link" href="contact.php">Contact</a>
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

		<div class="bus">
			<div class="container" id="bus-text">
            	<div class="bus-body">
            		<div class="row">
	                <div class="col-md-6" style="text-align:center;padding-top: 50px;text-shadow: 1px 1px 10px rgba(0,0,0,0.4);">
	                   	<h1><b>BOOK YOUR FLIGHT<br> TODAY!</b></h1><br>
	                    <p>Let Fly together with us, for your safty trip.</p>
	                </div>
	                <div class="col-md-6">
	                    <form>
	                        <div class="row form-group">
		                        <div class="col-md-6">
		                        	<label class="control-label">Leaving From</label>
		                        	<select class="form-control">
		                        		<option>Select a location</option>
		                        		<option>Thingangyun</option>
		                        		<option>Tarmwe</option>
		                        		<option>Hlaldan</option>
		                        		<option>Myayni Khone</option>
		                        	</select>
		                        </div>
		                        <div class="col-md-6">
		                        	<label class="control-label">Going to</label>
		                        	<select class="form-control">
		                        		<option>Select a location</option>
		                        		<option>Thingangyun</option>
		                        		<option>Tarmwe</option>
		                        		<option>Hlaldan</option>
		                        		<option>Myayni Khone</option>
		                        	</select>
		                        </div>
		                   	</div>
	                        <div class="row form-group">
		                        <div class="col-md-6">
		                        	<label class="control-label">Departure Date</label>
		                        	<input type="date" name="" class="form-control" placeholder="Check in">
		                        </div>
		                        <div class="col-md-6">
		                        	<label class="control-label">Number of Seats</label>
		                        	<select class="form-control">
		                        		<option>1</option>
		                        		<option>2</option>
		                        		<option>3</option>
		                        		<option>4</option>
		                        		<option>5</option>
		                        		<option>6</option>
		                        	</select>
		                        </div>
		                   	</div>
		                   	<div class="row form-group">
		                        <div class="col-md-6">
		                        	<label class="control-label">Nationality</label>
		                        	<select class="form-control">
		                        		<option selected="">Select</option>
		                        		<option>Myanmar</option>
		                        		<option>Foreigner</option>
		                        	</select>
		                        </div>		                        
		                    </div><br>
		                   	<button class="btn btn-xs" id="bus-btn">Book Now!</button>
	                    </form>
	                </div>
	            	</div>
            	</div>
           	</div>
        </div>

<?php include 'footer.php' ?>