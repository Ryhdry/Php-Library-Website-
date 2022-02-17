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
        width:600px;
        height:500px;
        display:inline-block;
        border-radius: 10px;
        padding: 15px 25px;
        box-sizing: border-box;
        cursor: pointer;
        margin: 10px 15px;
        background-color: white;
        background-position:center;
        background-size: contain;
        
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
                <li><a href="WebsiteIndex.php">Home</a></li>
                <li><a href="LibrarianLogout.php">Log Out</a></li>
                <li><a href="">Cart</a></li>

            </ul>
        </nav>
    </div>
    <br><br>
    <div class="row">
    <div class="heading">
        <h1>Welcome Librarian!</h1>
        <p>Welcome to the University of Technology Digital Library System.
            You can search and view books in the library. </p>
        <form>
        <button type="submit" formaction="WebsiteIndex.php">Return Home</button>
        </form>
</div>
    <div class="heading">
        <div class ="card" >
        <center><h2> Book Details</h2></center>

<table border="2">
  <tr>
    <td>quantity</td>
    <td>ISBN</td>
    <td>CALL Number</td>
    <td>title</td>
    <td>author</td>
    <td>subject</td>
  </tr>

<?php

include "connectDBS.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from book"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
  <td><?php echo $data['quantity']; ?></td>
    <td><?php echo $data['ISBN']; ?></td>
    <td><?php echo $data['callNo']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['author']; ?></td>
    <td><?php echo $data['subjectArea']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

            
      
        </div>

</div>
</body>
</html>











