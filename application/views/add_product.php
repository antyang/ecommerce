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
	    	<form action="add_product" method="post">
	      <label for="name">Name</label>
	      <input class="five columns" name="name" type="text" placeholder="Hat" id="name">
	    </div>
	  </div>
	  <div class="row">
	    <div class="six columns">
	      <label for="description">Description</label>
	      <textarea class="five columns" name="description" placeholder="Great Fit, Cool New Colors" id="description"></textarea>
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
	      <input class="five columns" name="new_category" type="textarea" placeholder="New Category" id="new">
	    </div>
	  </div>
	  <div class="row">
	  	<div class="six columns">
	  	<label>Images</label>
	  	<input class="button-primary four columns" type="submit" value="Upload">
	  	</div>
	  </div>
	  <div id="options" class="row">
	  	<div class="two columns">
	  	</div>
	  	<div class="eight columns">
	  		<input class="button-primary three columns" style="background-color: #ddd; color: black; border: 1px solid black;" type="submit" value="Cancel">
	  		<input class="button-primary three columns" style="background-color: lime; color: black; border: 1px solid black;" name="action" type="submit" value="Preview">
	  		<input class="button-primary three columns" style="background-color: blue; border: 1px solid black;" name="action" type="submit" value="Add">
	  	</div>
	  	<div class="two columns">
	  	</div>
	  </div>
	</form>
	</div>
</form>

</body>
</html>