<?php

session_start();
$accno = $_POST['accno'];
$psw =$_POST['psw'];
$type=$_POST['type'];
if($accno && $psw)
{
	$connect= mysqli_connect("localhost","root","","user") or die("coudld connect to database");
	
	if( $type=='admin'){
		$query= mysqli_query($connect,"SELECT * FROM `admin` WHERE accno ='$accno' ");
		
	}else{

	$query= mysqli_query($connect,"SELECT * FROM details WHERE accno ='$accno' ");
	
}
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{ 
		while($row=mysqli_fetch_assoc($query))
		{
			$dbacc= $row['accno'];
			$dbpsw=$row['psw'];
		}
		if($accno==$dbacc && $psw==$dbpsw)
		{ 
			if( $type=='admin'){
				?><script>
				window.location.href="./admin.php";
					</script><?php
			}else{
				$_SESSION["ACCNO"]="$accno";
				?><script>
				window.location.href="./login/customer.html";
					</script><?php
		}
			
		
			
		}
	 else if($accno==$dbacc && $psw!=$dbpsw)
	 {
		 ?><script>
    window.location.href="signin.html";
            alert("You Entered InCorrect Password ");
            document.psw.value.focus();
            </script><?php
			
	}
    }
	else 
      {
        ?><script>
    window.location.href="signin.html";
    alert("User Doesnt Exist");
    </script><?php
	
	  }
}
else
{
    ?>
    <script>
        window.location.href="./signin.html";
            alert("Please Enter Username and Password");
</script><?php

    
}	


?>