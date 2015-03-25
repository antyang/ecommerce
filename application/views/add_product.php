<html>
<head>
	<title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="/js/ajaxupload.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){

  var thumb = $('img#thumb');        

  new AjaxUpload('imageUpload', {
    action: $('form#newHotnessForm').attr('action'),
    name: 'image',
    onSubmit: function(file, extension) {
      $('div.preview').addClass('loading');
    },
    onComplete: function(file, response) {
      thumb.load(function(){
        $('div.preview').removeClass('loading');
        thumb.unbind();
      });
      thumb.attr('src', response);
    }
  });
  
});
    </script>
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
/* 		#imageUpload, #save {
 			float:left;
 		}*/

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
	  	<div class="four columns">
	  	</div>
	  	<div id="upload-area">
			<div id="preview">
				<img width="100px" height="100px" src="/images/icons/128px/zurb.png" id="thumb">
			</div>
			<div class="row">
				<form action="/playground/ajax_upload" id="newHotnessForm">
					<label>Upload a Picture</label><br><br>
					<input type="file" size="20" id="imageUpload" class=" "><br><br>
					<button class="button" id="save" type="submit">Save</button>
				</form>
			</div>
		</div>
		<div class="four columns">
	  	</div>
<!-- 	  	<div class="six columns">
	  	<label>Images</label>
	  	<input class="button-primary four columns" type="submit" id="image" value="Upload">
	  	<input type="file" id="my_file" name="photo" style="display: none;" />
	  	</div> -->
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