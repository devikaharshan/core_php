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
    
   <style>
       table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
    
    
    </style> 
<table>
        <thead>
            <tr>
                <th style="color:#50C878">ID</th>
                <th style="color:#50C878">Name</th>
                <th style="color:#50C878">Email</th>
                <th style="color:#50C878">Edit</th>
                <th style="color:#50C878">Delete</th>
            </tr>
         </thead>
    <?php

$sel=mysqli_query($conn,"select * from insert_table");
while($row=mysqli_fetch_array($sel))

{ 
    
   
                      echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td><a href='Edit.php?id=".$row['id']."'>Edit</a></td>";
                        echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                      echo "</tr>";
     
} 
?>    
   </table>
  </body>
    </html>