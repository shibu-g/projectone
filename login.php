<?php
# server name
$sName = "localhost:3307";
# user name
$uName = "root";
# password
$pass = "";

# database name
$db_name = "drone";
$conn = mysqli_connect($sName, $uName, $pass, $db_name);
$total=0;
if (isset($_POST['admin'])){
    echo "<script>alert('Welcome');</script>";
    header('location:admin.php');
}
if (isset($_POST['create'])){
    header('location:createuser.php');
}
if (isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
   $query="SELECT * FROM users WHERE username='$user' AND pasword='$pass'";
   
   $result=mysqli_query($conn,$query); 
   $flag=true;
   while($row = mysqli_fetch_assoc($result)){ 
    $flag=false;
    $username=$row['username'];
    echo "<script>alert('Welcome','$user');</script>";
    header('location:home.php');
    exit;
   }
   if($flag)
   echo "<script> alert('Please Enter Currect Username Or Password');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Log in Page</title>
</head>
<style>
    .main{
        height:300px;
        width:400px;
        box-shadow:2px 0px 2px 5px gray;
        margin-left:30%;
        margin-top:10vh;
        padding-top:30px;
    }
    form{

        margin-left:10%;
    }
    input{
        height:35px;
        width:80%;
        margin-bottom:15px;
        border:none;
        border-radius:10px;
        box-shadow:2px 1px 2px 2px black;
        font-size:20px;
padding-left:5px;
    }
    .btns{
        width:80%;
        display:flex;
        justify-content:space-between;
    }
    button{
        height:35px;
        width:40%;
        font-size:20px;
        font-weight:700;
    }
    .create button{
        height:35px;
        width:80%;
        margin-bottom:15px;
        margin-top:15px;
    }
</style>
<body>
    <div class="main">
        
      <form action="#" method="post">
        <div>
         <!-- <label for="ussername">User Name</label> -->
         <input type="text" placeholder="Enter Your UserName" name="username" id="">  
        </div>
        <div>
        <!-- <label for="ussername">Password</label> -->
         <input type="text" placeholder="Enter Your Password" name="password" id="">  
        
        <div class="btns">
            <button type="submit" name="submit">Log In</button>
        <button>Cancle</button>
        </div> 
        <div class="create">
          
            <button name="create">Create New User</button>
            <button name="admin">Log In AS Admin</button>
        </div>
        </div>
    </form>
    </div>
</body>
</html>