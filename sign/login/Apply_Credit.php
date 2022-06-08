
<?php
session_start();
$accno=$_SESSION['ACCNO'];
  $conn = mysqli_connect("localhost", "root", "", "user");
          
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. "  . mysqli_connect_error());
  }
    echo "ok";
  // Taking all  values from the form data(input)
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $detals = $_POST['detals'];
  $email = $_POST['email'];
  $Phnum=$_POST['Phnum'];
  $pin = $_POST['pin'];
  $limit1=$_POST['limit1'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];
  $city=$_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  
 
  

    
  
  $sql = "INSERT INTO Credit VALUES('$accno','$fname','$lname','$detals','$email','$Phnum',
            '$pin','$limit1','$address','$pincode','$city','$state','$country' )";
    
  if(mysqli_query($conn, $sql)){
    
      ?><script>
          alert("SUCCESSFULLY APPLIED FOR CREDIT CARD.Will be delivered soon...")
          window.location.href="./customer.html";
      </script>
      <?php

 } else{
      
      echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
   }

    
  // Close connection
  mysqli_close($conn);


?>