<?php
session_start();
include ("connectDBS.php");
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
    table{
        width: 100%;
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
        <h1>Welcome Guest!</h1>
        <p>Welcome to the University of Technology Digital Library System.
            You can search and view books in the library. </p>
        <form>
        <button type="submit" formaction="WebsiteIndex.php">Return Home</button>
        </form>
</div>
    <div class="heading">
        <div class ="card">
        <h5>Book Search</h5>
        <form method="POST" >
        <label>Search By: </label><br>
        <input type="radio" id="Year" name="Search1" value="year">
        <label for="Year">Year</label>
        <input type="radio" id="Title" name="Search2" value="title">
        <label for="Title">Title</label>
        <input type="radio" id="Subject" name="Search3" value="subject">
        <label for="Subject">Subject</label>
        <input type="radio" id="Author" name="Search4" value="author">
        <label for="Author">Author</label><br><br>
        <input type="text" id="search" name="searchdata" required>
        <input type="submit"><br><br>
        </form>
        
        <table border="2">
        <tr>
            <td>Quantity</td>
            <td>Book Cover</td>
        </tr>


    <?php
    include ("connectDBS.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $search= $_POST["searchdata"];
       
        if(isset($_POST['Search1'])){
        $sql="select * from book where year like '%$search%'";
         
        $records=$conn->query($sql);
        
        while($row=$records->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['bookCover']; ?></td>    
            </tr>	
            <?php
            }
            ?>
            </table>

           <?php mysqli_close($conn); 

        } 
        if(isset($_POST['Search2'])){
            $sql="select * from book where title like '%$search%'";
                $records = mysqli_query($conn,$sql);

                $records=$conn->query($sql);
        
                while($row=$records->fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['bookCover']; ?></td>    
                    </tr>	
                    <?php
                    }
                    ?>
                    </table>
        
                   <?php mysqli_close($conn); 
                
        
            } 
            if(isset($_POST['Search3'])){
                $sql="select * from book where subjectArea like '%$search%'";
                $records = mysqli_query($conn,$sql);

                $records=$conn->query($sql);
        
                while($row=$records->fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['bookCover']; ?></td>    
                    </tr>	
                    <?php
                    }
                    ?>
                    </table>
        
                   <?php mysqli_close($conn); 
                
            } 
            if(isset($_POST['Search4'])){
                $sql="select * from book where author like '%$search%'";
                $records = mysqli_query($conn,$sql);

                $records=$conn->query($sql);
        
                while($row=$records->fetch_assoc()){
                    ?>
                    <tr>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['bookCover']; ?></td>    
                    </tr>	
                    <?php
                    }
                    ?>
                    </table>
        
                   <?php mysqli_close($conn); 
        
            }
        
     
    }
        
    
?>
</div>
</div>

</div>

</body>



</html>
