<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  ?>
 <html>
     <body>
         <?php
         $id=$_GET['id'];
         $sel=mysqli_query($conn,"select * from insert_table where id='$id';");
         $f=mysqli_fetch_array($sel);
       
         ?>
         <form action="" method="post">
    Name: <input type="text" name="name" value="<?php echo $f['name']?>" /><br><br>

    Email: <input type="text" name="email" value="<?php echo $f['email']?>"/><br><br>

    <input type="submit" name="save"/>
         </form>
    </body>
 </html>   
   <?php 
    if(isset($_POST['save'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $updat=mysqli_query($conn,"UPDATE insert_table SET name = '$name', email= '$email' WHERE ID = '$id';");
      if($updat==true)
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
