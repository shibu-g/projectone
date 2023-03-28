
<?php session_start(); ?>
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

if ( isset ($_POST['submit'])){
    $type=$_POST['typeofdrone'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $mobile=$_POST['mobile'];
    $location=$_POST['location'];

   $query="INSERT INTO bookings values('$type','$name',' $contact','$mobile','$location','hi','hi',' ')";
   mysqli_query($conn,$query); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking</title>
</head>
<style>
    body{
    background-color: aliceblue;
}
.main{
    margin: 0vw 10vw;
    height:900px;
    width: 80%;
    background-image: url("pxfuel.jpg");
    background-repeat: no-repeat;
    padding-top:10px;
}
.event_title{
    font-size:23px;
    color:white;
}
.book{
    /* position: absolute; */

    font-size:35px;
    color:white;
    font-weight:700;
    text-align:center;
}

</style>
<body>
    <div class="main">
        <div class="formdiv" style="margin-top:10%;">
        <div class="book">
            Book New Drone
        </div>
        <form action="#"  method="post" style="margin:10%;">
    <label for="subject" class="event_title">Select Your Drone Type</label><br>
                    <select class="subject" type="text" name="typeofdrone" placeholder="Category" style="padding:10px 0px; width:80%;"
                        required>
                        <option>Ordinery</option>
                        <option >Special</option>
                        <option>Super Special</option>
                    </select>
                    <input style="border-top:none;border-left:none;border-right:none; width:78%;margin-top:10px;padding:10px 5px;" class="input-field"
                                type="text" placeholder="Your Name" name="name" required>
                   <input style="border-top:none;border-left:none;border-right:none; width:78%;margin-top:10px;padding:10px 5px;" class="input-field"
                                type="text" placeholder="Your Contact No" name="contact" required>
                   <input style="border-top:none;border-left:none;border-right:none; width:78%;margin-top:10px;padding:10px 5px;" class="input-field"
                                type="text" placeholder="Your Mobile Name" name="mobile" required>
    
                                <select style="border-top:none;border-left:none;border-right:none;width:80%;margin-top:10px;padding:10px 0px;" name="location"
                                class="input-field" required>
                                <option value="" disabled selected>Select Your Location</option>
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
                              
                                $query = "SELECT location FROM location";
                                echo $id;
                                $result1=mysqli_query($conn,$query); 
                                while($row = mysqli_fetch_assoc($result1) ){ ?>
                                <option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>
                                <?php
                                } 
                                ?>
                            </select>
                            <div style="border-top:none;border-left:none;border-right:none; width:80%;margin-top:10px;padding:10px 0px;" class="total">
                        Your Total Bill was:-1200.
                    </div>
    
                            <div style="width:100%;margin-top:10px;">
                        <a href="home.php"><input style="display:inline-block;width:30%;font-size:23px; color:black; background:white;padding:10px 0px; text-align: center;"
                                class="form_btn" placeholder="Cancel"></input></a>
                        <button style="display:inline-block;width:49%;font-size:22px; background: #4B9AFB;padding:10px 0px; text-align: center;" class="form_btn" name="submit"
                            type="submit">Book Appointment</button>
                    </div>
        </form>
    </div>
    </div>
</body>
</html>