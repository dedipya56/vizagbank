
<?php
error_reporting(0);
session_start();
if(isset($_SESSION['ACCNO']))
    {   $accno=$_SESSION["ACCNO"];}
if(isset($_POST['submit'])){
   
    $psw=$_POST['accpsw'];
    $query="SELECT * FROM `details` WHERE `accno`='$accno' AND `psw`='$psw' ";
    $conn=mysqli_connect("localhost","root","","user");
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_array($result)){
            $name=$row['name'];
            $bal=$row['bal'];
            
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="checkbal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    rel="stylesheet"/>
    
</head>

<body>
    <nav class="nav-main"> 
        <div class="btn-toggle-nav" onclick="toggleNav()">
        </div>
        <ul>
            <li><a href="customer.html">Home</a></li>
            <li><a href="Rates and charges.html">Rates and Charges</a></li>
            <li><a href="Loan Information.html">Loan Info</a></li>
            <li><a href="Query.html">Query</a></li>
            <li><a href="Services.html">Our services</a></li>
            <li><a href="Feedback.html">Feedback</a></li>
            <li><a href="view.php">View Details</a></li>
            <li><a href="View_Transactions.php">View Transactions</a></li>
            <li><a href="#">Check Balance</a></li>
        </ul>
    </nav>
    <div class="container">
    <header id="head">Checking the balance</header><br></div>
    <form method="post">
    
   
    <label for="accpsw" name="accpsw" class="accnumber">PIN: </label>
    <input type="password" name="accpsw"    style="height:25px; width:300px;" /><br></br>
    <input type="submit" name="submit"  class="accnumber" value="submit" /><br></br>
    
    <label for="accname" name="accname"  class="accnumber">Account Holder Name:</label>
    <input type="text" name="accname"    style="height:25px; width:300px;" value=" <?php echo $name; ?>"/><br></br>
    <label for="accbala" name="accbal"  class="accnumber">Account Balance:</label>
    <input type="text" name="accbal"    style="height:25px; width:300px;" value=" <?php echo $bal; ?>"/><br></br>
   
    </form>
    
    <div>
        <ul class="socialmedia">
                <li>
                <a href="https://www.facebook.com" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                </li>
                <li>
                    <a href="https://www.instagram.com">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.whatsapp.com">
                        <i class="fab fa-whatsapp-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </li>
        </ul>
    </div>
    <aside class="nav-sidebar">
        <ul>
            <li><span>Applying Online</span></li>
            <li><a href="Apply_Cheque.html">Apply Cheque</a></li>
            <li><a href="Apply_Debit.html">Apply Debit</a></li>
            <li><a href="Apply_Loan.html">Apply Loan</a></li>
            <li><a href="Apply_Credit.html">Apply Credit</a></li>
            <li><a href="Update.html">Update Details</a></li>
            <li><a href="Make_Transaction.html">Make Transaction</a></li>
        </ul>
    </aside>
    <script>
        function search()
        {
            $.ajax({
                type : 'POST',
                url : "checkbal.jsp",
                data : { 'accno': $("$acccnumber").val()},
                success : function(data){
                    var obj=JSON.parse(data)
                    if(obj !=0){
                    $("custname").html(obj[0].name);
                    $("accbalance").html(obj[0].balance);

                    }
                    else{
                        $("custname").html();
                       $("accbalance").html();
                    }
                    
                }

            })
        }
        </script>
        <script src="checkbal.js"></script>
</body>
</html>