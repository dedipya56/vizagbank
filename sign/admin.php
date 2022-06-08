
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./login/Update.css">
    <style>
        table,td,tr,th{
            border: 1px solid black;
        }
        table{
            
            margin-left: auto;
            margin-right: auto;
        }
        #para{margin-top: 5%;}
        body{
            text-align: center;
        }
        button{
            margin-left: 0;
            margin-right: 0;
            width :50px;

        }
        a{
          margin:5px;  
        }
        
        
    </style>
    <title>Details</title>
</head>
<body>
<a href="./signin.html"  title="Go to previous page" style="text-decoration:none; margin:15px; font-size:15px;"><i class="fas fa-arrow-circle-left" style=" margin:15px; font-size:25px;"></i></a>
    
<h1  style="margin-top: 50px;" id="bank1"  >Vizag Bank</h1>

<H2 style="margin-top: 30px;" id="bank1">WELCOME ADMIN!!</H2>


<?php
error_reporting(0);


$query="SELECT * FROM `details`  ";
$conn=mysqli_connect("localhost","root","","user");
    $result=mysqli_query($conn,$query);
    


if(mysqli_num_rows($result)>0)
{
    
    echo "<section>
<table >
<tr> 
            <th>Account No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account type</th>
            <th>Address</th>
            <th> Phone number </th>
            <th>DOB</th>
            <th>Branch</th>
            <th>Balance</th>
            <th colspan='2'>operation </th>
            
        </tr>

";

while ($row = mysqli_fetch_array($result)) {
   


    
    echo "<tr>
    
    <td>".$row['accno']."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['type']."</td>
    <td>".$row['addr']."</td>
    <td>".$row['phn']."</td>
    <td>".$row['dob']."</td>
    <td>".$row['branch']."</td>
    <td>".$row['bal']."</td>
    <td>
        <a href='./adminUpdate.php?accno=$row[accno]&name=$row[name]&type=$row[type]&dob=$row[dob]&branch=$row[branch]&email=$row[email]&address=$row[addr]&phone=$row[phn]&bal=$row[bal]'>
        <input type='submit' value='Edit' style='background-color:green;'></input>  </a>
      </td>
    <td> <a href='./deleteDetails.php?accno=$row[accno]' onclick='return checkdelete()'>
    <input type='submit' value='Delete' style='background-color:red;'></input></a></td></a></td>

    </tr>";
}
echo "</table>";
?>
<a href="./signin.html"><button style="width: auto; margin: 0 300px;" title="click me to go to signin page">Back</button></a> 
 <?php 
}  
else{
    ?><script>
             window.location.href="showDetails.php";
             alert("No such record ");
             //document.password.value.focus();
            </script><?php
}
?>
</section>
</body>
</html>