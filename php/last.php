<?php
        
        include('connection.php');
        $name= $_POST['name'];
        $email= $_POST['email'];
		$subject= $_POST['subject'];
		$message= $_POST['message'];
  
 
       $query = "insert into `shiv` (`name`,`email`,`subject`,`message`) values ('$name','$email','$subject','$message')";
 
        if(mysqli_query($connection, $query)) {
             echo "<a href='final.html'></a>";
			 header("location: final.html");
  }
   else {
          echo "something else".mysqli_error($connection);
          }
        
?>