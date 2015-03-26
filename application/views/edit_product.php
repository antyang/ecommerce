<html>
<head>
	<title>Edit Product ID 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/fontawesome/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
 	<style type="text/css">  
	 	body{
            margin-left: 20px;
            /*font-family: pragmatapro;*/
        }
        .fa fa-user, a{
            color: black;
            margin-right: 10px;
        }
 		label {
 			display: inline-block;
 			text-align: right;
 			float: left;
 			clear: left;
 		}
 		h2 {
 			margin: 10px 10px 20px 10px;
 		}
 		textarea {
 			height: 300px;
 		}
 		img {
 			margin-bottom: 5px;
 		}
 		.container {
 			margin-left: 200px;
 		}
		a {
			text-align: center;
 			text-decoration: none;
 			margin-bottom: 10px;
 		}
 		p {
 			text-align: center;
 			margin-bottom: 5px;
 		}
 		.delete {
 			margin-bottom: 40px;
 		}

	</style>
</head>
<body>
	

<form>
	<div class="container" style="margin: 0 auto">
	<div class="row">
        <div class="one columns">
                <h3 style="border-bottom:1px solid black; width:93px;">Name</h3>
        </div>
        <div class="ten columns">
            <h5 style="float:right;"><a href="/main/dashboard"><i class="fa fa-user"></a></i> <a href="/main/cart"><i class="fa fa-shopping-cart"></i></a></h5>
        </div>
    </div>

<?php   	var_dump($product); ?>
		<h2 style="text-align:center;">Edit Product - ID <?=$id?></h2>
		<h2 style="text-align:center;"><?=$product->productname?></h2>
		<div class="row">
		    <div class="six columns">
		      <label for="name">Name</label>
		      <input class="five columns" type="text" placeholder="Hat" id="name" style="width:200px">
		    </div>
		    <div class="six columns">
			<div class="eight columns">
				<label for="description">Description</label><br>
				<textarea class="five columns" placeholder="Great Fit, Cool New Colors" id="description" style="width:400px;"></textarea>
			</div>
			</div>
			
		</div>
	  <div class="row">
	    <div class="six columns">
	      <label for="category">Categories</label>
	      <select class="five columns" name="category" id="category">
	      <?php 
	      foreach($categories as $category)
	      { ?>
	      	<option name="category" value="$category->category?"><?=$category->category?></option>
	      <? } ?>
	      </select>
	    </div>
	  </div>
		<div class="row">
			<div class="six columns">
				<label for="new">Or add a new category</label>
				<input class="five columns" type="textarea" placeholder="New Category" id="new">
			</div>
		</div>
		<div class="row">
			<div class="six columns">
				<label>Images</label>
				<input class="button-primary four columns" type="submit" value="Upload">
			</div>
		</div>


	  <div class="row">
	  	<div class="one columns">
	  	</div>
	  	<div class="eight columns">
	  		<div class="three columns"><img id="pic1" src="https://igcdn-photos-b-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11056004_626501974117289_184839600_n.jpg" class="eleven columns" style="background-color: #ddd; color: black; border: 1px solid black;">

	  		</div>
	  		<div class="three columns"><img id="pic2" src="https://igcdn-photos-b-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11056004_626501974117289_184839600_n.jpg" class="eleven columns" style="background-color: #ddd; color: black; border: 3px solid black;"><br><p><strong>Main</strong></p>
	  		</div>
	  		<div class="three columns"><img id="pic3" src="https://igcdn-photos-b-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11056004_626501974117289_184839600_n.jpg" class="eleven columns" style="background-color: #ddd; color: black; border: 1px solid black;">
	  		</div>
	  	</div>
	  	<div class="one columns">
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="one columns">
	  	</div>
	  	<div class="eight columns">
	  		<input class="button three columns delete" id="pic1" style="background-color: #ddd; color: black; border: 1px solid black;" value="delete">
	  		<input class="button three columns delete" id="pic2" style="background-color: #ddd; color: black; border: 1px solid black;" value="delete">
	  		<input class="button three columns delete" id="pic3" style="background-color: #ddd; color: black; border: 1px solid black;" value="delete">
	  	</div>
	  	<div class="one columns">
	  	</div>
	  </div>
	  <div id="options" class="row">
	  	<div class="two columns">
	  	</div>
	  	<div class="eight columns">
	  		<input class="button-primary three columns" style="background-color: #ddd; color: black; border: 1px solid black;" type="submit" value="Cancel">
	  		<input class="button-primary three columns" style="background-color: lime; color: black; border: 1px solid black;" type="submit" value="Preview">
	  		<input class="button-primary three columns" style="background-color: blue; border: 1px solid black;" type="submit" value="Update">
	  	</div>
	  	<div class="two columns">
	  	</div>
	  </div>
	</div>
</form>

</body>
</html>