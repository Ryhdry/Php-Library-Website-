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
        font-size: 18px;
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
    button{
        width: 180px;
        color: black;
        font-size: 15px;
        padding: 12px 0;
        background: #fff;
        border: 0;
        border-radius:20px;
        outline: none;
        margin-top: 30px;
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
    <div class="row">
    <div class="heading">
        <h1>Welcome Guest!</h1>
        <p>Welcome to the University of Technology Digital Library System.
            You can search and view books in the library. </p>
        <form>
        <button type="submit" formaction="WebsiteIndex.php">Return Home</button>
        </form>
</div>
    <div class="heading">
        <div class ="card" onclick="location.href='GuestView.php';" >
            <h5>New User</h5>
        </div>
        <div class ="card" onclick="location.href='Librarian.php';">
            <h5>Edit Account</h5>
        </div>
        <div class ="card" onclick="location.href='Librarian.php';">
            <h5>Delete Account</h5>
        </div>
        <div class ="card" onclick="location.href='WebsiteIndex.php';">
            <h5>Return Home </h5>
        </div>
       
    </div>

</div>
</div>
</body>


</html>

