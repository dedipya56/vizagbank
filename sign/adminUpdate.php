
<?php
session_start();
error_reporting(0);
$accno=$_GET['accno'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$type=$_GET['type'];
$branch=$_GET['branch'];
$email=$_GET['email'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$bal=$_GET['bal'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel ="stylesheet" href="./update1.css">
    <style>
        input{
            background-color: white;
        }
    </style>
</head>
<body style="background-image:  url('https://bsmedia.business-standard.com/_media/bs/img/article/2018-07/18/full/1531852476-8493.jpg');background-size: cover; background-repeat: no-repeat;">
<h1 style="text-align: center;"> ACCOUNT NUMBER : <?php echo "$accno " ?></h1>    
<form action="" method="GET" style="width: 50%; text-align: center; margin-left:25%;margin-bottom: 50px; margin-top: 30px;">  
        <h2 style="text-align:centre;">Sign Up</h2>  
         <hr>
         <p> 
            <label for="accno">ACCOUNT NUMBER  :</label>
            <input type="text" placeholder="Enter  acc number" name="accno" value="<?php echo "$accno" ?> " required>
        </p>
        
        <p> 
            <label for="name">ACCOUNT HOLDER NAME  :</label>
            <input type="text" placeholder="Enter  holder name" name="name" value="<?php echo "$name" ?> " required>
        </p>
        <p> 
            <label for="email">EMAIL ID :</label>
            <input type="email" placeholder="Email" value="<?php echo "$email" ?> "  name="email" required>
        </p>
        
         <p>
            <label for="DOB">Date Of Birth:</label>
            <input type="date" name="dob"  value="<?php echo "$dob"?>">
        </p>
        
             <label for="type">Acc type:</label>
            <select name="type">
                <option value="savings"
                        <?php if($type=='savings'){echo "selected";}?>>Savings Type Account</option>
                        <option value="fixed deposit"
                        <?php if($type=='fixed deposit'){echo "selected";}?>>Fixed Deposit Type Account</option>
            </select>
            
         </p>
        <p>
             <label for="address">Address:</label>
             <input type="text" name="address" value="<?php echo "$address"?>">
         </p>
         <p>
             <label for="phone">Phone no:</label>
             <input type="number" name="phone"  value="<?php echo "$phone"?>">
         </p>
        
         <p>
             <label for="branch">Branch:</label>
             <input type="text" name="branch" id="Address" value="<?php echo "$branch"?>">
         </p>
         <p>
             <label for="bal">Balance:</label>
             <input type="number" name="bal" id="Address" value="<?php echo "$branch"?>">
         </p>
        <button  type="submit" name="submit" value="submit" title="click me to Update" class="btn">Submit</button>
    </form>
 
    <a href="./view.php"><button style="width: auto; margin: 0 300px;" title="click me to go Back">Back</button></a> 
     
</body>
</html>
<?php
if($_GET['submit']){
$accno =  $_GET['accno'];
$name = $_GET['name'];
$type =  $_GET['type'];
$address = $_GET['address'];
$email = $_GET['email'];
$dob= $_GET['dob'];
$branch=$_GET['branch'];
$bal=$_GET['bal'];
$phone=$_GET['phone'];
$query="UPDATE details Set name='$name',dob='$dob',branch='$branch',type='$type' ,phn='$phone',email='$email',addr='$address' ,bal='$bal'  WHERE accno='$accno'";
$connection = mysqli_connect("localhost", "root", "", "user");
$result = mysqli_query($connection,$query);
if($result){
    echo " <script>alert('Details Updated')</script>"; 
    ?>
    <meta http-equiv="refresh" content="0 ; URL=http://localhost/vizagbank/sign/admin.php">
    <?php
}else{
    echo "Failed to update";
}
}

?>