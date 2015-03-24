<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Products Show</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">

    <style>
	    body{
            margin-left: 20px;
            /*font-family: pragmatapro;*/
        }
        .fa fa-user, a{
            color: black;
            margin-right: 10px;
        }
        li ul{
            display: inline-block;
            padding: 20px;
        }
        li{
            list-style-type:none;
            font-weight:bold;
        }
        #black_back{
            background-color: black;
            height: 70px;
        }
        #orderinfo p{
			text-decoration: underline;
			/*border-bottom: 1px solid black;*/
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
        <div class="twelve column" style="margin-top: 5%">
       	</div>
    </div>

<!--            <img src="#" id="banner_picture">-->
	<div class="row">
		<div class="four columns" id="orderinfo">
			<h5>Order #: uno</h5>
			<ul>
				<p>Shipping Info:</p>
				<li>Name:</li>
				<li>Address:</li>
				<li>City:</li>
				<li>State:</li>
				<li>Zip:</li>
			</ul>
			<ul>
				<p>Billing Info:</p>
				<li>Name:</li>
				<li>Address:</li>
				<li>City:</li>
				<li>State:</li>
				<li>Zip:</li>
			</ul>
		</div>

		<div class="eight columns">
			<table class="u-full-width">
				<tr>
					<th>ID</th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>132</td>
					<td>Cup</td>
					<td>$1.99</td>
					<td>1</td>
					<td>$1.99</td>
				</tr>
				<tr>
					<td>132</td>
					<td>Cup</td>
					<td>$1.99</td>
					<td>1</td>
					<td>$1.99</td>
				</tr>
				<tr>
					<td>132</td>
					<td>Cup</td>
					<td>$1.99</td>
					<td>1</td>
					<td>$1.99</td>
				</tr>
				<tr>
					<td>132</td>
					<td>Cup</td>
					<td>$1.99</td>
					<td>1</td>
					<td>$1.99</td>
				</tr>
			</table>
		</div>
		<div class="three columns">
			<p>Status: SHIPPED</p>
		</div>
	</div>
</div>    



</body>
</html>