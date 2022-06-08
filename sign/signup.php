
<?php
session_start();
  $conn = mysqli_connect("localhost", "root", "", "user");
          
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. "  . mysqli_connect_error());
  }
    echo "ok";
  // Taking all  values from the form data(input)
  $accno = $_POST['accno1'];
  $name = $_POST['name1'];
  $email = $_POST['email1'];
  $type = $_POST['type1'];
  $psw = $_POST['psw1'];
  //$gender=$_POST['gender'];
 
  

    
  
  $sql = "INSERT INTO `details`(`accno`, `name`, `email`, `type`, `psw`) VALUES ('$accno','$name','$email','$type','$psw')";
    
  if(mysqli_query($conn, $sql)){
    $_SESSION["ACCNO"]="$accno";
      ?><script>
          alert("SUCCESSFULLY SIGNED UP.")
          window.location.href="./login/customer.html";
      </script>
      <?php

 } else{
      
      echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
   }

    
  // Close connection
  mysqli_close($conn);


?>