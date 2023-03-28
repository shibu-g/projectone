<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<style>
     .main{
        width:80%;
        box-shadow:2px 0px 2px 5px gray;
        margin-left:10%;
        margin-top:10vh;
        padding-top:10px;
        text-align:center;
    }
    .text{
        font-size:30px;
        margin-bottom:10px;
    }
    table{
    border: 1px solid white;
    border-collapse: collapse;
    width: 100%;
    overflow: scroll;
}
table tr{
    border-left: 1px solid white;
    border-right: 1px solid white;
    text-align: center;

}

table th,td{
    border-left: 1px solid white;
    border-right: 1px solid white;
}

</style>
<body>
    <div class="main">
      <div class="text">
        Welcome to The Admin Page
      </div>
      <div class="container">
      <table>
            <thead>
                <tr class="col">
                    <th>Booking_id</th>
                    <th>Type</th>
                    <th>booking for</th>
                    <th>Mobile No</th>
                    <th>Location</th>
                </tr>
                <tbody>
                    
                </tbody>
            </thead>

          </table>
          <div class="bottom">
            <button>
              Edit Customers
            </button>
            <button>
               EXIT
            </button>
          </div>
      </div>
    </div>
    <script>
        let tbl=document.querySelector('tbody');
//         let tr=document.createElement('tr');
// let td1=tr.appendChild(document.createElement('td'));
// let td2=tr.appendChild(document.createElement('td'));
// let td3=tr.appendChild(document.createElement('td'));
// let td4=tr.appendChild(document.createElement('td'));
// let td5=tr.appendChild(document.createElement('td'));
let count=0;
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
$query="SELECT * FROM bookings";
$result=mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){ ?>

  tb1.innerHTML+=<tr>
<td><?php echo $row['name']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<?php
}
?>
    </script>
</body>
</html>