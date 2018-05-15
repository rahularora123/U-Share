<?php
        
        include('connection.php');
        $first= $_POST['first'];
        $last= $_POST['last'];
		$email= $_POST['email'];
		$password= $_POST['password'];
  
 
       $query = "insert into `ram` (`first`,`last`,`email`,`password`) values ('$first','$last','$email','$password')";
 
        if(mysqli_query($connection, $query)) {
             echo "<a href='signup.html'></a>";
			 header("location: signup.html");
  }
   else {
          echo "something else".mysqli_error($connection);
          }
        
?>