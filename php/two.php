<?php
    include('connection.php');
    $email = $_POST['email'];
    $password= $_POST['password']; 
    $query = "Select email,password from `ram` WHERE `email`,`password` = '$email','$password'";
    
    $result = $connection->query($query);

    $row = $result->fetch_row();
    if(mysqli_query($connection, $query)) {
    echo "<a href='final.html'></a>";
			 header("location:final.html");
  }
   else {
          echo "something else".mysqli_error($connection);
          }
?>