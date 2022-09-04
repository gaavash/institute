<?php include("../../inc/header.php"); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../../inc/navbar.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("../../inc/sidebar.php"); ?>

  <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Staff Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Advanced Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <!-- /.card-header -->
                        <div class="card-body">
                <?php 
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                // validation to input field
            if($username!= "" && $email!="" && $password!=""){
                $query ="INSERT INTO users(username, email, password) VALUES ('$username','$email','$password')"; // variable
               
                $result= mysqli_query ($conn, $query); // connect to database
                if($result){
                    echo " <span style='color:green' class='bg-success text-white px-5'>data is  submitted</span>";
                                // header('Refresh: 0.34; url=manage-skills.php');
                                ?>
                                <meta http-equiv="refresh" content=" 0 ; url = manage-users.php" />
                                <?php

                }
                else {
                    echo " <span style='color:red'>data is not submitted</span>";
                }
            }
            else{
                echo "<span style='color:warning' class='bg-danger text-white px-5'>All Fields are required</span>";
            }
            }
            ?>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="userHelp"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        
                    </div>
                    <div class="button pb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
    </div>
    <?php include("../../inc/footer.php"); ?>