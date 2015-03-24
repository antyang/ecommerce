<html>
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
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
 			$(document).on('click', '.update', function(){
    			$(this).replaceWith("<i class='fa fa-refresh fa-spin update'></i>");
  				})
  			});
		
	</script>

	<style>
		body{
			margin-left: 20px;
			/*font-family: pragmatapro;*/
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
		#credit{
			width: 50px;
			margin: auto;
			float: left;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="one columns">
				<h3 style="border-bottom:1px solid black; width:93px;">Name</h3>
		</div>
		<div class="ten columns">
			<h5 style="float:right;"><a href="/main/dashboard"><i class="fa fa-user"></a></i> <a href="/main/cart"><i class="fa fa-shopping-cart"></i></a></h5>
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
					<i class="fa fa-refresh update"></i><i class="fa fa-times" style="padding-left:10px;"></i>
				</td>
				<td>$9.99</td>
			</tr>
			<tr>
				<td>Black Belt for staff</td>
				<td>$9.99</td>
				<td><input type="number" name="numericInput" style="margin: auto;" size="2" min="0" max="20" value="0">
					<i class="fa fa-refresh update"></i><i class="fa fa-times" style="padding-left:10px;"></i>
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
				<form action="/" method="post">
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
					<h6 style="margin:auto;font-family:hermit">Choose your payment</h6>
					<h3 id="credit" ><i class="fa fa-credit-card"></i></h3>
					<h4 style="font-size:36px;"><a href=""><i class="fa fa-cc-paypal"></i></a></h4>		
						<div id="credit_payment">
							<input type="text" placeholder="Card">
							<input type="text" placeholder="Security Code">
							<input type="date" placeholder="Expiration">
						</div>
					<a href="/main/products"><button>Pay</button></a>
				</form>		
					<a href="/main/products"><button>Continue Shopping</button></a>
			</div>
		</div>
	</div>

</div>
</body>
</html>