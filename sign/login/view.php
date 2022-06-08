
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    <script src="Query.js"> </script>
    <link rel="stylesheet" href="Update.css">
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
<nav class="nav-main"> 
        <div class="btn-toggle-nav" onclick="toggleNav()">
        </div>
        <ul>
            <li><a href="customer.html">Home</a></li>
            <li><a href="Rates and charges.html">Rates and Charges</a></li>
            <li><a href="Loan_info.html">Loan Info</a></li>
            <li><a href="Query.html">Query</a></li>
            <li><a href="Services.html">Our services</a></li>
            <li><a href="Feedback.html">Feedback</a></li>
            <li><a href="view.php">View Details</a></li>
            <li><a href="Make_Transaction.html">Make Transaction</a></li>
            <li><a href="checkbal.php">Check Balance</a></li>
        </ul>
    </nav>

<h1  style="margin-top: 120px;" id="bank1"  >Vizag Bank</h1>

<?php
error_reporting(0);
session_start();
if(isset($_SESSION['ACCNO']))
    {   $accno=$_SESSION["ACCNO"];


$query="SELECT * FROM `details` WHERE `accno`='$accno' ";
$conn=mysqli_connect("localhost","root","","user");
    $result=mysqli_query($conn,$query);
    }
else{
    echo "Session id not set";
}
?>
<?php 

if(mysqli_num_rows($result)>0)
{
    
    echo "<section>
<table >";
while ($row = mysqli_fetch_array($result)) {
   
    echo 
        "<tr>
            <th>ACCOUNT NO.</th>
            <td>".$row['accno']."</td> 
        </tr>
        <tr>
            <th>Name</th>
            <td>".$row['name']."</td> 
        </tr>
        <tr>
            <th>Email Id</th>
            <td>".$row['email']."</td> 
        </tr>
       
        <tr>
            <th>Account type</th>
            <td>".$row['type']."</td> 
        </tr>
        <tr>
            <th>Address</th>
            <td>".$row['addr']."</td> 
        </tr>
        <tr>
            <th>Phone no.</th>
            <td>".$row['phn']."</td> 
        </tr>
        <tr>
            <th>DOB.</th>
            <td>".$row['dob']."</td> 
        </tr>
        
        <tr>
            <th>Branch</th>
            <td>".$row['branch']."</td> 
        </tr>
        <tr>
        <th>Update</th>
        <td>
        <a href='./updateDetails.php?accno=$row[accno]&name=$row[name]&dob=$row[dob]&branch=$row[branch]&email=$row[email]&address=$row[addr]&phone=$row[phn]'>
        <input type='submit' value='Edit' style='background-color:green;'></input>  </a>
      </td>
        </tr>";

}
echo "</table>";

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