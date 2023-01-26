<?php 
    //now check the connection
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $conn = new mysqli("localhost","root","","user-login");
        if($conn->connect_error){
            echo "Connection Failed:".$conn->connect_error;
        } else {
          
     
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $sql_query = "INSERT INTO `user` (`email`,`password`) VALUES (`$email`,`$password`)";
    
            if(mysqli_query($conn,$sql_query)) { echo"New Details Entry inserted successfully !"; } else{ echo"error:".$sql ."" . mysqli_error($conn); }
        }
        mysqli_close($conn);
    }
    
?>