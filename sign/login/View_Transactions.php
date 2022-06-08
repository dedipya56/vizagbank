
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3da4f03368.js" crossorigin="anonymous"></script>
    
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


$query="SELECT * FROM `transactions` WHERE `acc`='$accno' ";
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
<table >
<tr> 
            <th>Receiver name</th>
            <th>Receiver accno</th>
            <th>card number</th>
            <th>cvv</th>
            <th>amount</th>
            <th colspan='2'>card details </th>
            <th>timestamp</th>
            
        </tr>

";

while ($row = mysqli_fetch_array($result)) {
   


    
    echo "<tr>
    
    <td>".$row['rname']."</td>
    <td>".$row['racc']."</td>
    <td>".$row['cnum']."</td>
    <td>".$row['cvv']."</td>
    <td>".$row['amount']."</td>
    <td>".$row['month']."</td>
    <td>".$row['year']."</td>
    <td>".$row['time']."</td>

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