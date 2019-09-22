<!DOCTYPE html>
<html>
<head>
    <title>My Webpage</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
    <style type="text/css">
        .header {
            min-height: 50px;
            text-align: center;
        }
        .logo img {
            width: 200px;
        }
        .menu ul {
            padding: 0;
        }
        .menu ul li {
            display: inline-block;
            position: relative;
        }
        .menu ul li:hover ul.submenu  {
            display: block;
        }
        .menu ul li a {
            padding: 10px 20px;
            text-decoration: none;
        }
        .content {
            background-color: #ddd;
            min-height: 500px;
            overflow: auto;
        }
        .footer {
            background-color: #ccc;
            min-height: 50px;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 800px;
            margin: 0 auto;
        }
        .thumbnail {
            background-color: white;
            text-align: center;
            padding: 10px;
            width: 225px;
            margin: 10px;
            float: left;
        }
        .thumbnail img {
            width: 100%;
        }

        ul.submenu {
            background-color: #eee;
            border: 1px solid #ccc;
            text-align: left;
            position: absolute;
            top: 20px;
            left: 0;
            display: none;
        }

        ul.submenu li {
            display: block;
        }
        ul.submenu li a {
            display: block;
            padding: 5px 10px;
        }

        .jumbotron {
            position: relative;
            font-family: 'Raleway', sans-serif;
            width: 100%;
            padding: 80px 40px;
            box-sizing: border-box;
            text-align: center;
            color: white;
            background-color: #aaa;
            background-size: cover;
            background-image: url(https://images.unsplash.com/photo-1515111293107-b0cd6448f5f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4f56141064dbe63db663bb7a2c73b71&auto=format&fit=crop&w=1350&q=80);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.1;
        }

        .jumbotron h2,
        .jumbotron p {
            position: relative;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
    <div class="logo">
        <img src="img/sample-logo.png">
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">About</a>
                <ul class="submenu">
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>   
        </ul>
    </div>
    <div class="jumbotron">
        <div class="overlay"></div>
        <h2>Welcome to My Homepage</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor necessitatibus quae voluptate explicabo architecto fugiat asperiores illo quibusdam qui mollitia, porro fugit. Illum sapiente modi, ut harum aliquam accusamus unde.</p>
    </div>

    </div>
    <div class="content" background-color: white;>
        <h2>My Products</h2>

        <div class="thumbnail">
            <img src="img/250x150.png">
                <h2>Product 2</h2>
                <p>Rp 250.000</p>
        </div>

        <div class="thumbnail">
            <img src="img/250x150.png">
                <h2>Product 2</h2>
                <p>Rp 250.000</p>
        </div>

        <div class="thumbnail">
            <img src="img/250x150.png">
                <h2>Product 2</h2>
                <p>Rp 250.000</p>
        </div>

        <div class="thumbnail">
            <img src="img/250x150.png">
                <h2>Product 2</h2>
                <p>Rp 250.000</p>
        </div>

    </div>
    <div class="footer" background-color: #eee;>
        <p>copyright 2018 My Page</p>
    </div>
</div>

</body>
</html>