<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="/assets/jquery-ui.css">
    <script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type="text/javascript" src="/assets/jquery-ui.js"></script>
    <script type='text/javascript' src='/assets/jquery.simplemodal.js'></script>
    <script type='text/javascript' src='/assets/osx.js'></script>
    <link type='text/css' href='/assets/osx.css' rel='stylesheet' media='screen' />
    <link type='text/css' href='/assets/demo.css' rel='stylesheet' media='screen' />
    <script type="text/javascript">

        $(document).ready(function () {
            $('img').hover(
                function(){
                    $(this).addClass("full_img");
                }, function(){
                    $(this).removeClass('full_img');
                }
            );
        });


    </script>


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
        a{
            text-decoration: none;
        }

        .first_img{
            height: 110px;
            width: 110px;
            padding: 5px;
            opacity: .7;
        }
        .product_box{
            height: 120px;
            width: 120px;
            border: 2px solid silver;
            display: inline-block;
        }

        .full_img{
            opacity: 1 !important;

        }
        img{
            width: 320px;
            height: 350px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="black_back">
        <div class="twelve columns" style="margin-top: 0%">
            <li>

                <ul><a href="/cart">Shopping Cart (0)</a></ul>
            </li>
        </div>

    </div>
</div>

<h1>Hi</h1>
<h3><?=$product[0]->productname?> $<?=$product[0]->price?></h3>
<img src="<?=$product[0]->image?>">
<!--<h3>Pineapple Shirt $19.99</h3>-->
<button>Add to Cart</button>



</body>
</html>