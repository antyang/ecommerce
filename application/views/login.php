<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/skeleton.css">

    <style>
        #banner_picture{
            height: 100px;
        }
        h2{
            display: inline-block; vertical-align: top;
            padding-top:20px;
            padding-left: 30px;
        }
        h3{
            color:darkblue;
        }
        .red{
            color: red;
            text-align: center;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="twelve column" style="margin-top: 5%">
<!--            <img src="#" id="banner_picture">-->
            <h2>Admin Login</h2>
            <?="<p class='red'>".$this->session->flashdata('login_failed');?></p><br>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="four columns" style="margin-top: 5%">
            <h3>Login</h3>
            <form action="/main/admin_login" method="post">
                <input type="email" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="submit" value="Login" class="button-primary">
            </form>
        </div>

    </div>
    <a href="/main/logoff"><button>Log Off</button></a>
</div>



</body>
</html>