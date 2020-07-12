<?php include 'header.php' ?>
    <!-- header -->
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="package.php" id="act">Packages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                          <a class="dropdown-item" href="flight.php">Flight Ticket</a>
                          <a class="dropdown-item" href="#">Bus Ticket</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" >About</a>
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

<div style="height:100px;background:#071b33;"></div>
    <div class="a_banner"></div>

     
		<div class="container">
            <h2 class="header-pay">MAKE PAYMENT</h2>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3>DOE PE Express Tour</h3>
					<p>
						<i class="fa fa-map-marker" aria-hidden="true"></i> No.124/126, 50th Street, Pazundaung Township, Yangon, Myanmar (Burma).&nbsp;&nbsp;
                        <i class="fa fa-phone" aria-hidden="true"></i> Tel: 01705876, 01225569, 09 73235103</p>
                        <br>
                        
                        <div class="well" style="padding: 5px 18px;">
                                <h4 class="details-h3">Booking Details</h4>
                                <p><i style="color: #555;" class="fa fa-calendar" aria-hidden="true"></i> <strong>Travel Date :</strong> 23-Apr-2020</p>
                        </div>
                        <form name="form1" id="form1" method="post">
                                
                                <table class="table">
                                        <tbody><tr style="background: #29517C; color: #fff;">
                                                <th>Tour Name / Service(s)</th>
                                                <th class="text-center">No. of Persons</th>
                                                <th class="text-center">Price per Person (USD)</th>
                                                <th class="text-right">Total Amount (USD)</th>
                                        </tr>
                                        <tr style="background: #C7E6ED;">
                                                <td>Yangon: Nightlife Tour</td>
                                                <td class="text-center">2 </td>
                                                <td class="text-center">67<input type="hidden" value="67" name="package_price"></td>
                                                <td class="text-right">134</td>
                                        </tr>
                                        <tr style="background: #ECF8FA;">
                                                <td></td>
                                                <td></td>
                                                <td class="text-right">Sub Total</td>
                                                <td class="text-right">134<input type="hidden" value="134" name="hid_total_amt" id="total"></td>
                                        </tr>
                                        <tr style="background: #ECF8FA;">
                                                <td></td>
                                                <td></td>
                                                <td class="text-right">Service Charge</td>
                                                <td class="text-right">13.40<input type="hidden" value="13.40" id="hid_servicecharge_amt" name="hid_servicecharge_amt"></td>
                                        </tr>
                                        <tr style="background: #DEEBED; border-top: 2px solid #C6D0D1;">
                                                <td></td>
                                                <td></td>
                                                <td class="text-right" style="font-weight: 700;">Total Amount (USD)</td>
                                                <td class="text-right" style="font-weight: 700;">147.40<input type="hidden" value="147.40" id="hid_total_amt" name="hid_grand_total_amt"></td>
                                        </tr>
                                </tbody></table>
                        <h1 class="info-header" style="text-transform: capitalize;">Your Information</h1>
                        <div style="background: #eee; padding: 40px; border-radius: 3px;">
                                
                                <div class="row">
                                    <div class="col-lg-6" style="padding: 0 20px;">
                                            <div class="form-group">
                                            	<label>Name</label>
                                            	<span style="color: red;">*</span>
                                            	<input type="text" name="full_name" class="form-control">
                        					</div>
                        					<div class="form-group">
                                            	<label>Email</label>
                                            	<span style="color: red;">*</span>
                                            	<input type="email" name="contact_email" class="form-control">
                        					</div>
                        					<div class="form-group">
                                            	<label>Contact Number</label>
                                            	<span style="color: red;">*</span>
                                            	<input type="text" name="phone" class="form-control">
                        					</div>
                        					<div class="form-group">
                                            	<label>Pick up Point / Hotel Name</label>
                                            	<span style="color: red;">*</span>
                                            	<input type="text" name="place" rows="3" maxlength="300" class="form-control">
                        					</div>
                        					<div class="form-group">
                        						<label>Trip Type :</label>
                        						<select class="form-control" name="tour_type">
                        							<option>Select One</option>
                        							<option>Bussiness Travel</option>
                        							<option>Holiday with Family</option>
                        							<option>Holiday with Friends</option>
                        							<option>Holiday as a Couple</option>
                        							<option>Holiday on own</option>
                        						</select>
                        					</div>
                        			</div>
                        			<div class="col-lg-6">
                        				<div class="form-group">
                        					<label>Country of Passport</label>
                        					<select class="form-control" name="country">
                        						<option selected="selected">Select One</option>
                        						<option>Myanmar</option>
                        						<option>Cambodia</option>
                        						<option>Liaos</option>
                        						<option>China</option>
                        					</select>
                        				</div>
                        				<div class="form-group">
                        					<label>Special Request (max:300 characters)</label>
                        					<textarea class="form-control" name="special-chara" rows="6"></textarea>
                        				</div>
                                        <br>
                                        <button class="btn btn-xs" id="view">Pay Now</button>
                        			</div>
                        		</div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
    <div style="height: 50px;"></div>
<?php include 'footer.php' ?>