<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
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
            color: white;
            font-weight:bold;
        }
        #black_back{
            background-color: black;
            height: 70px;
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
            <img src="#" id="banner_picture">
            <h2>Admin Login</h2>
            <?="<p class='red'>".$this->session->flashdata('login_failed');?></p><br>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="four columns" style="margin-top: 5%">
            <h3>Login</h3>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="submit" value="Login" class="button-primary">
            </form>
        </div>

    </div>
    <a href="#"><button>Log Off</button></a>
</div>



</body>
</html>