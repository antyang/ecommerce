<html>
<head>
	<title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
 	<style type="text/css">  
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
	<h2>Add Product</h2>

	
<form>
	<div class="container">
		  <div class="row">
	    <div class="six columns">
	      <label for="name">Name</label>
	      <input class="five columns" type="text" placeholder="Hat" id="name">
	    </div>
	  </div>
	  <div class="row">
	    <div class="six columns">
	      <label for="description">Description</label>
	      <textarea class="five columns" placeholder="Great Fit, Cool New Colors" id="description"></textarea>
	    </div>
	  </div>
	  <div class="row">
	    <div class="six columns">
	      <label for="category">Categories</label>
	      <select class="five columns" id="category">
	        <option value="Option 1">Shirt</option>
	        <option value="Option 2">Hat</option>
	        <option value="Option 3">Pant</option>
	        <option value="Option 4">Key Chain</option>
	        <option value="Option 5">Belt</option>
	        <option value="Option 6">Stuff</option>
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