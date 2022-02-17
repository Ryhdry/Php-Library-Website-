<?php
   include ("connectDBS.php");
   session_start();
   $notice = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Submit'])){
        $email = $_POST['email'];
        $password= $_POST['password'];
        $sql="select * from librarian where email = '$email' and password = '$password'";
         
        $records=$conn->query($sql);
        while($row=$records->fetch_assoc()){
            if($row['email'] == $email && $row['password'] == $password){
                header("Location: LibrarianBookManager.php");
                
            } else {
                echo "Apple";

            }
             
        }
    }    
}

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
    h4{
        font-family: "Georgia", Serif;
        font-size: 40px;
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
        width:400px;
        height:400px;
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
        background:linear-gradient(rgba(0,0,0,2), rgba(0,0,0,2));;
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
    td {
        text-align: left;
        
    }
    table {
        align-items: center;
        border: 1px solid black;
        width: 100%;
    }
    
    input[type=text], input[type=number], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }

    input[type=submit], input[type=reset],select  {
    background-color: #04AA6D;
    color: white;
    padding: 10px 20px;
    margin: 0px 0;
    border: none;
    cursor: pointer;
    width: 100%;
   
}
    input[type=submit]:hover, input[type=reset]:hover{  
        opacity: 0.8;
   
    }

    text{
        font-family: Georgia, serif;
        font-size: 30px;
        letter-spacing: -0.4px;
        word-spacing: -1.4px;
        color: #000000;
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
       
    }
    input[type=file]::file-selector-button {
        border: 2px solid #6c5ce7;
        padding: .2em .4em;
        border-radius: .2em;
        background-color: #a29bfe;
        transition: 1s;
        }

        input[type=file]::file-selector-button:hover {
        background-color: #81ecec;
        border: 2px solid #00cec9;
        }
    .error{
        color: #D8000C;
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
        <h1>Welcome Librarian!</h1>
        <p>Please Log In to our system</p>
        <form>
        <button type="submit" formaction="WebsiteIndex.php">Return Home</button>
        </form>
</div>
    <div class="heading">
        <div class ="card" >
            <form action = "" method = "POST">
            
             <table align="center">             
             <tr>  
            <td colspan="2"><h4><center>Log In</center></h4></td>
            </tr>
            <tr>
             <td><label for="cars">Select Occupation: </label></td>
             <td> <select name="employee" id="employee">
              <option value="Librarian">Librarian</option>
              <option value="Administrator">Administrator</option>
              </select></td>
            </tr>
            <tr>
            <td> <label>Email  :</label></td><td><input type = "text" name = "email" class = "box"/></td>
            </tr>
            <tr>
            <td><label>Password  :</label></td><td><input type = "password" name = "password" class = "box" /></td>
            </tr>
            <tr>
            <td colspan = "2"><input type = "submit" name="Submit" value = "Submit "/></td>
            </tr>
            <tr><td><span class="error"><?php echo $notice;?></span></td></tr>
            <tr>
            <td><h6>Not yet a member? <a href="LibrarianRegister.php">Register</a></h6></td>
            </tr>
            </table>
             
            </form>

           
        </div>
        
       
</div>

</div>
</body>


</html>
