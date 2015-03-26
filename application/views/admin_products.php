<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Products</title>
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

        li{
            display: inline-block;
            padding: 20px;
        }
        ul{
            list-style-type:none;
            font-weight:bold;
        }
        #black_back{
            background-color: black;
            height: 70px;
        }
        img{
            width: 50px;
            height: 50px;
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
            <h5 style="float:right;"><a href="/login"><i class="fa fa-user"></a></i> <a href="cart"><i class="fa fa-shopping-cart"></i></a></h5>
        </div>
    </div>
    <div class="row">
        <div class="twelve column" style="margin-top: 5%">
            <!--            <img src="#" id="banner_picture">-->
            <h2>Products</h2>

        </div>
    </div>
    <div class="row">
        <div class="nine columns">
            <form>
                <input type="text" name="search" placeholder="Search">
            </form>

        </div>
        <div class="two columns">
            <a href="add"><button>Add Product</button></a>
        </div>
    </div>
</div>





<div class="container">
    <div class="row">
        <div class="twelve columns" style="margin-top: 5%">
            <table>
                <thead>

                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Current Stock</th>
                    <th>Actions</th>
                </thead>
                <?php foreach ($products as $product)
                {?>
                <tr>
                    <td><img src="<?= $product->{'image'} ?>"></td>
                    <td><?= $product->{'id'} ?></td>
                    <td><?= $product->{'productname'} ?></td>
                    <td><?= $product->{'stock'} ?></td>
                    <td><a href="edit/<?=$product->id?>">Edit</a> <a href="/main/delete_product/<?=$product->{'id'}?>">Delete</a></td>

                </tr>

                <?php } ?>


            </table>
        </div>

    </div>
    <a href="/logoff"><button class="button-primary">Log Off</button></a>
</div>



</body>
</html>