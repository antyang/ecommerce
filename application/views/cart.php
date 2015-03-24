<html>
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>
	
	<link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/skeleton.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>

		$(document).ready(function(){

			$("#credit").click(function(){
				$("#credit_payment").toggle();
			});
 			$('#toggle').click(function(){
    			$("#toggle").replaceWith("<i class='fa fa-toggle-on' id='toggle'> Same as shipping</i>");
  				});
 			$('#update').click(function(){
    			$("#update").replaceWith("<i class='fa fa-refresh fa-spin' id='update'></i>");
  				});
 			$('#update1').click(function(){
    			$("#update1").replaceWith("<i class='fa fa-refresh fa-spin' id='update'></i>");
  				});
		});
		
	</script>

	<style>
		body{
			margin-left: 20px;
		}
		.fa fa-user, a{
			color: black;
			margin-right: 10px;
		}
		.fa fa-cc-paypal{
			display: inline;
		}
		#credit_payment{
			display: none;
		}
		#toggle{
			padding-bottom: 5px;
		}
		#billing_info{
			margin-bottom: 0px;
			/*display: inline-block;*/
		}

	</style>
</head>
<body>
<div class="container">
	<div class="row" style="padding-left: 30px;">
		<div class="ten columns">
			<h3>eCommerce</h3>
		</div>
		<div class="two columns">
			<h5><a href="/main/dashboard"><i class="fa fa-user"></a></i> <i class="fa fa-shopping-cart"></i></h5>
		</div>
	</div>

	<div class="row">
		<table class="u-full-width">
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
			<tr>
				<td>Black Belt for staff</td>
				<td>$9.99</td>
				<td><input type="number" name="numericInput" style="margin: auto;" size="2" min="0" max="20" value="0">
					<i class="fa fa-refresh" id="update"></i><i class="fa fa-times" style="padding-left:10px;"></i>
				</td>
				<td>$9.99</td>
			</tr>
			<tr>
				<td>Black Belt for staff</td>
				<td>$9.99</td>
				<td><input type="number" name="numericInput" style="margin: auto;" size="2" min="0" max="20" value="0">
					<i class="fa fa-refresh" id="update1"></i><i class="fa fa-times" style="padding-left:10px;"></i>
				</td>
				<td>$9.99</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>Total qty</td>
				<td>total $$</td>
			</tr>
		</table>
	</div>

	<div class="row" style="padding-left: 38px;">
		<div class="six columns">
			<div class="twelve columns">
			<form action="">
				<h5 id="shipping_info">Shipping Information</h5>
					<input type="text" placeholder="First Name">
					<input type="text" placeholder="Last Name">
					<input type="text" placeholder="Address">
					<input type="text" placeholder="Address 2">
					<input type="text" placeholder="City">
					<input type="text" placeholder="State">
					<input type="text" placeholder="Zipcode">
			</form>
			</div>
		</div>

		<div class="six columns">
			<div class="twelve columns">
				<form action="">
					<h5 id="billing_info">Billing Information</h5>
					<!-- <input type="checkbox" name="mirror"> Same as shipping<br> -->
					<i class="fa fa-toggle-off" id="toggle"> Same as shipping</i><br>
						<input type="text" placeholder="First Name">
						<input type="text" placeholder="Last Name">
						<input type="text" placeholder="Address">
						<input type="text" placeholder="Address 2">
						<input type="text" placeholder="City">
						<input type="text" placeholder="State">
						<input type="text" placeholder="Zipcode"><br>
					<h6>Choose your payment</h6>
					<h3 id="credit" style="margin:auto;"><i class="fa fa-credit-card"></i><a href=""><h4><i class="fa fa-cc-paypal"></i></h4></a></h3>			
						<div id="credit_payment">
							<input type="text" placeholder="Card">
							<input type="text" placeholder="Security Code">
							<input type="date" placeholder="Expiration">
						</div>
					<a href="/main/products"><button>Continue Shopping</button></a>
					<a href=""><button>Pay</button></a>
				</form>		
			</div>
		</div>
	</div>

</div>
</body>
</html>