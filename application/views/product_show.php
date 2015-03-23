<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Products Show</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">

    <style>
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
    <div class="row" id="black_back">
        <div class="ten columns" style="margin-top: 0%">
            <li>
                <ul><a href="#">Dashboard</a></ul>
                <ul><a href="#">Orders</a></ul>
                <ul><a href="#">Products</a></ul>
            </li>
        </div>

        <div class="two columns" style="margin-top: 1%">
            <a href="#">Log Off</a>
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