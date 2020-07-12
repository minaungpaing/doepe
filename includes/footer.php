<footer>
		<div class="container">
			<div class="row" id="footer">
				<div class="col-md-4">
					<h5>ABOUT DOE PE Travel & Tours LTD.</h5>
					<p>Operating since 1991, Doe Pe Travela & Tours Ltd. is one of Myanmar's leading travel agencies and tour operators based in Yangon. </p>
					<img src="../img/24.png" width="100%">
				</div>				
				<div class="col-md-4" >
					<h5>OUR SPECIALTY TOURS</h5>
						<a href="#"><i class="fa fa-circle"></i> &emsp; Latest Myanmar Tours</a><br><br>
						<a href="#"><i class="fa fa-circle"></i> &emsp; Culture & Heritae Tours</a><br><br>
						<a href="#"><i class="fa fa-circle"></i> &emsp; Nature & Advanture Tours</a><br><br>
						<a href="#"><i class="fa fa-circle"></i> &emsp; Day Tours</a><br><br>
						<a href="#"><i class="fa fa-circle"></i> &emsp; Luxury Tours</a><br><br>
				</div>
				<div class="col-md-4">
					<h5>CONTACT INFO</h5>
					<p>
						<i class="fa fa-home"></i>&emsp;No.124/126, 50th Street, Pazundaung Township, Yangon, Myanmar (Burma).<br><br>
						<i class="fa fa-phone"></i>&emsp;09-761728032, 09-12345678, 0987654321.<br><br>
						<i class="fa fa-envelope"></i><a href="mailto:shadowkingmap@gmail.com">&emsp;shadowkingmap@gmail.com</a><br><br>
						<i class="fab fa-facebook"></i>&emsp; www.https//:doepe.com<br><br>
						<center><img src="../img/logo/mtf.png"></center>
					</p>
				</div>
			</div>
			<center><div id="line1"></div></center>
			<p style="text-align: center !important;">Copyright © 2020 Doe Pe Travels & Tours. Developed by <font color="yellow">Min Aung Paing</font></p>
			<br>
		</div>	
	</footer>
</body>
	<script>
		$(function(){			
			var mainNav = $("nav");
			sticky = "sticky";
			headerHeight = 200;

			$(window).scroll(function(){
				if ($(this).scrollTop() > headerHeight ){
					mainNav.addClass(sticky);
				}
				else{
					mainNav.removeClass(sticky);
				}
				if ($(this).scrollTop() > (headerHeight *3) ){
					mainNav.addClass("inView");
				}
				else{
					mainNav.removeClass("inView");
				}
			})
		});
	</script>
</html>