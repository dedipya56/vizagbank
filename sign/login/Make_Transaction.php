
<?php
session_start();
$accno=$_SESSION['ACCNO'];
  $conn = mysqli_connect("localhost", "root", "", "user");
          
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. "  . mysqli_connect_error());
  }
    
  // Taking all  values from the form data(input)
  
  $rname = $_POST['rname'];
  $racc = $_POST['racc'];
  $cnum = $_POST['cnum'];
  $cvv = $_POST['cvv'];
  $amount=$_POST['amount'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  
  
  $query="SELECT * FROM `details` WHERE `accno`='$accno' ";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_array($result)) {
           $bal=$row['bal'];
  }
    $rem=$bal-$amount;
   
    
    if(($rem)>0){
        $query1="UPDATE details SET bal='$rem'";
        $result1 = mysqli_query($conn,$query1);
        if($result1){
          $sql = "INSERT INTO transactions VALUES('$accno','$rname','$racc','$cnum','$cvv','$amount','$month',
          '$year',now())";
  
  if(mysqli_query($conn, $sql)){
  
    ?><script>
        alert("TRANSACTION SUCCESSFULL. ")
        window.location.href="./customer.html";
    </script>
  
    <?php
  
  } else{
    
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
  }
  
        }else{
          echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            
        }
    }else{
      echo "Insufficient Balance";
    }
   } else{
      echo "No such user";
    }
      
    // Close connection
    mysqli_close($conn);
  
  
  ?>