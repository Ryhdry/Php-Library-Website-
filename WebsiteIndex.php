<?php


?>
<html>
<head>
    <title>UTECH DIGITAL SYSTEM</title> 
    
    
</head>
<style type ="text/css">
    .navbar{
        height:12%;
        display: flex;
        align-items: center;
    }
    nav{
        flex: 1;
        text-align:right;
    }
    nav, ul,li{
        list-style: none;
        display: inline-block;
        margin-left:60px;
    }
    nav, ul,li,a{
        text-decoration: none;
        color: white;
        font-size:20px;
    }
    .logo{
        width: 50px;
        cursor:pointer;

    }
    h1, h3{
        font-family: "Georgia", Serif;
        font-size: 60px;
        letter-spacing: -0.8px;
        word-spacing: 2px;
        color: white;
        text-decoration: none;
        font-style: normal;
        font-variant: small-caps;
        
    }
    h5{
        font-family: "Georgia", Serif;
        font-size: 20px;
        text-align: center;

    }

    p{
        font-family: "Georgia", Serif;
        font-size: 20px;
        color: white;
    }

    .backcolour{
        width: 100%;
         height: 100vh;
            background-image: url("back.jpg");
            opacity: 0.6;
            background-position: center;
            background-size: cover;
            padding-left:5%;
            padding-right:5%;
            box-sizing:border-box;
            overflow:auto;

    }
    .card{
        width:200px;
        height:230px;
        display:inline-block;
        border-radius: 10px;
        padding: 15px 25px;
        box-sizing: border-box;
        cursor: pointer;
        margin: 10px 15px;
        background-image: url("book.jpg");
        background-position:center;
        background-size: contain;
        transition: transform 0.5s;
    }
    .card:hover{
        transform: translateY(-10px);
    }
    .row{
        display: flex;
        height:88%;
        align-items:center;
    }
    .heading{
        flex-basis: 50%;
    }
    body{
        margin: 0;
        padding: 0;
        background:linear-gradient(rgba(0,0,0,2), rgba(0,0,0,2));
        height: 100vh;
        overflow: hidden;
        
        }
    
</style>
<body style="background-color:white">
<div class="backcolour">
    <div class="navbar">
        <img src="Image.png" class="logo">
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Log In</a></li>
                <li><a href="">Cart</a></li>

            </ul>
        </nav>
    </div>
    <br><br><br>
    <div class="row">
    <div class="heading">
        <h1>Welcome!</h1>
        <p>Welcome to the University of Technology Digital Library System.
            You can search, view books in the library or edit accounts
            based on your priviledges. Please select your priviledge </p>

</div>
    <div class="heading">
        <div class ="card" onclick="location.href='Guest.php';" >
            <h5>Guest</h5>
        </div>
        <div class ="card" onclick="location.href='Librarian.php';">
            <h5>Librarian</h5>
        </div>
        <div class ="card" onclick="location.href='Admin.php';">
            <h5>Administrator</h5>
        </div>
        <div class ="card">
            <h5>Group</h5>
        </div>
</div>

</div>
</body>


</html>