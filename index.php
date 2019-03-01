<?php
if(isset($_POST['save'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



   $name=$_POST['name'];
   $email=$_POST['email']; 
   $sql=mysqli_query($conn,"insert into insert_table(name,email) values('$name','$email')");
   if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }




$conn->close();
}
?>
<html>

<body>

<form action="" method="post">

name: <input type="text" name="name" /><br><br>

Email: <input type="text" name="email" /><br><br>

 

<input type="submit" name="save"/>

</form>

</body>
</html>