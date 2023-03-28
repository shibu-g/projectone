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
if (isset($_POST['create'])){

    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $arr=explode(" ",$name);
    $username=$arr[0].$phone%1000;
    // echo $username;
    if(strcmp($password,$confirm)==0){
        $query="INSERt INTO users Values('$username','$password',$phone,'$gmail','$name')";
        mysqli_query($conn,$query); 
        echo "<script>alert('Congratulation '+'$name'+' Your Account Was Created your userid = '+'$username');</script>";
    header("location:login.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>
<style>
    .main{
        height:400px;
        width:400px;
        box-shadow:2px 0px 2px 5px gray;
        margin-left:30%;
        margin-top:10vh;
        padding-top:40px;
        padding-left:45px;
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
    button{
        height:35px;
        width:40%;
        font-size:20px;
        font-weight:700;
    }
    .top{
        font-size:40px;
        margin-bottom:15px;
        margin-left:15px;
    }
</style>
<body>
    <div class="main">
       <form action="" method="post">
        <div class="top">
            Create New User
        </div>
        <div> <input type="text" name="name" id="" placeholder="Enter your Name" required></div>
        <div> <input type="email" name="gmail" id="" placeholder="Enter your Gmail" required></div>
        <div> <input type="number" name="phone" id="" placeholder="Enter your Phone" required></div>
        <div> <input type="text" name="password" id="" placeholder="Enter your Password" required></div>
        <div> <input type="text" name="confirm" id="" placeholder="Confirm Password" required></div>
        <div class="btns">
            <button type="submit" name="create">Create</button>
            <button type="form_tag" class="hi" href="login.php">Cancle</button> 
        </div>
       </form>
    </div>
    <script>
        document.querySelector('.hi').addEventListener('click',()=>{
            window.location.href="login.php";
        });
    </script>
</body>
</html>