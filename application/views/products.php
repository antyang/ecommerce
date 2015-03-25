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
        /*#black_back{
            background-color: black;
            height: 70px;*/
        }
        /*a{
            text-decoration: none;
            }*/

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
            height: 75%;
            width: 75%;

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
            <div class="container">
                <div class="twelve columns" style="margin-top: 5%";>
                    <? 


                        foreach($data as $hue)
                            // var_dump($hue->{'image'});

                            // die();
                    {?>
                    <div class="product_box">


                        <a href="show/<?=$hue->{'id'}?>" class="osx"><img class= "first_img" src="<?= $hue->{'image'} ?>"></a>
                        <a href="#" class="osx"><?=$hue->{'productname'}?><br>$<?=$hue->{'price'}?></a>

                    </div>

                    <? } ?>
 
                </div>
            </div>
        </div>
    </div>
</div>


<!-----------Modal----------->


        <!-- modal content -->
        <div id="osx-modal-content">
       <div class="close"><a href="#" class="simplemodal-close">x</a></div>
            <div id="osx-modal-data">
            <?php $this->load->view('product_page') ?>
                <p><button class="simplemodal-close">Close</button> <span>(or press ESC or click the overlay)</span></p>
            </div>
        </div>


<!-----------------TEST-------------->

</body>
</html>