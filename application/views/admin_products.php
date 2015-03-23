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
<!--            <img src="#" id="banner_picture">-->
            <h2>Products</h2>

        </div>
    </div>
    <div class="row">
        <div class="nine columns">
            <form>
                <input type="text" name="search" placeholder="Search">

        </div>
        <div class="two columns">
            <select>
                <option value="in_process">Show All</option>
                <option value="canceled">Order In Process</option>
                <option value="shipped">Shipped</option>
            </select>
            </form>
        </div>
    </div>
</div>





<div class="container">
    <div class="row">
        <div class="twelve columns" style="margin-top: 5%">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Billing Address</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td><a href="#">1</a></td>
                        <td>Steve Jobs</td>
                        <td>01/15/2015</td>
                        <td>1 Infinity Loop</td>
                        <td>$9.99</td>
                        <th>
                            <select>
                                <option value="in_process">Order In Process</option>
                                <option value="canceled">Canceled</option>
                                <option value="shipped">Shipped</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <td><a href="#">1</a></td>
                        <td>Michael Choi</td>
                        <td>3/20/2015</td>
                        <td>1980 Zanker Road</td>
                        <td>$99.99</td>
                        <th>
                            <select>
                                <option value="in_process">Order In Process</option>
                                <option value="canceled">Canceled</option>
                                <option value="shipped">Shipped</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <td><a href="#">1</a></td>
                        <td>Wiz Kalifa</td>
                        <td>12/14/2015</td>
                        <td>Two Dazed Court</td>
                        <td>$999.99</td>
                        <th>
                            <select>
                                <option value="in_process">Order In Process</option>
                                <option value="canceled">Canceled</option>
                                <option value="shipped">Shipped</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <td><a href="#">1</a></td>
                        <td>Sample Name</td>
                        <td>12/13/2015</td>
                        <td>1 Infinity Loop</td>
                        <td>$9.99</td>
                        <th>
                            <select>
                                <option value="in_process">Order In Process</option>
                                <option value="canceled">Canceled</option>
                                <option value="shipped">Shipped</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sample Name</td>
                        <td>12/13/2015</td>
                        <td>1 Infinity Loop</td>
                        <td>$9.99</td>
                        <th>
                            <select>
                                <option value="in_process">Order In Process</option>
                                <option value="canceled">Canceled</option>
                                <option value="shipped">Shipped</option>
                            </select>
                        </th>
                    </tr>

                </thead>
            </table>
        </div>

    </div>
    <a href="#"><button class="button-primary">Log Off</button></a>
</div>



</body>
</html>