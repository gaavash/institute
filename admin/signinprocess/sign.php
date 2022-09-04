<?php 
require ("../../connection/config.php");

    
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                // validation to input field
            if($username!= "" && $email!="" && $password!=""){
                $query ="INSERT INTO users (username, email, password) 
                VALUES ('$username','$email','$password')"; // variable
         
                $result= mysqli_query ($conn, $query); // connect to database
                if($result){
                    echo " data is  submitted ";
                    header('Refresh: 0; url=../index.php');
                    // <meta http-equiv="refresh" content=" 0 ; url = manageuser.php" />

                }
                else {
                    echo "data is not submitted";
                }
            }
            }
            ?>
             