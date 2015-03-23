<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
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