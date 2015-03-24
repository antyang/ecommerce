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

        .product_box{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row" id="black_back">
        <div class="ten columns" style="margin-top: 0%">
            <li>

                <ul><a href="/cart">Shopping Cart (0)</a></ul>
            </li>
        </div>
        <div class="two columns" style="margin-top: 1%">
            <a href="#">Log Off</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="three columns" style="margin-top: 0%">
            <form>
                <input type="text" name="product_search" placeholder="Product Name">
                <input type="submit" name="search" value="Search">
            </form>
            <h4><strong>Categories</strong></h4>
            <ul>
                <li><a href="#"> Rush Shirts (15)</a></li>
                <li><a href="#">Rush Tanks (25)</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Tanks</a></li>
                <li><a href="#">All Items</a></li>
            </ul>
        </div>
        <div class="nine columns" style="margin-top: 1%">
            <div class="row">
                <div class="eight columns">
                    <h3>Tshirts</h3>
                </div>
                <div class="four columns">
                    <a href="#">first</a> | <a href="#">prev</a> | 2 | <a href="#">next</a>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="product_box">
                        <img src="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>