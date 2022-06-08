<?php
$accno=$_GET['accno'];
$conn= mysqli_connect("localhost", "root", "", "user");
$query="DELETE FROM details where accno='$accno' ";
$data=mysqli_query($conn,$query);
if ($data){
    ?><script>
          alert("SUCCESSFULLY DELETED THE RECORD.")
      </script>
      <meta http-equiv="refresh" content="0 ; URL=http://localhost/vizagbank/sign/admin.php">
      <?php
}else{
    ?><script>
    alert("FAILED to delete the record.")
</script>
<meta http-equiv="refresh" content="0 ; URL=http://localhost/vizagbank/sign/admin.php">
<?php
}
?>