<?php
include("includes/header.php");
?>
	<!--//header-bottom-->
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>Contact us</h3>
			<div class="contact-form">
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<div class="col-md-6 cnt-inpt">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					</div>
					<div class="col-md-6 cnt-inpt">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea onfocus="this.value = '' ;" onblur="if (this.value == '') {this.value = 'Message...';}" required=""> Message... </textarea>
					<input type="submit" value="submit">
				</form>
			</div>
		</div>
	</div>
	<!--//contact-->
	<!--map-->
	
	<!--//map-->
	<!--footer-->
	<?php
	include("includes/footer.php");
	?>