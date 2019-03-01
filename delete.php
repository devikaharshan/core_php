<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>

 <html>
     <body>
        <form action="" method="post">
            <input type="submit" name="Delete"/>
        </form>
     </body>
     
</html>

<?php

if(isset($_POST['Delete'])){
        $id=$_GET['id'];
        $del=mysqli_query($conn,"DELETE FROM insert_table WHERE id='$id';"); 
    if($del==true)
      {
        $message = 'Success';
        echo $message;
          $conn->close();
      }
        else
      {
        echo ''.mysql_error();
      }
}
?>