<?php include("../../inc/header.php"); ?>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("../../inc/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include("../../inc/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Contact Form</h1>
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
                      if(isset($_GET['id'])){
                        $id= $_GET['id'];
                        
                        $query1= "SELECT * FROM contacts where id= $id";
                        $result1 =mysqli_query($conn, $query1);
                        $data= $result1->fetch_assoc();

                      }
                      ?>
                      <?php


                      if(isset($_POST['submit'])){
                        $map= $_POST['map'];
                        $name= $_POST['name'];
                        $email= $_POST['email'];
                        $subject= $_POST['subject'];
                        $message= $_POST['message'];
                        $phone=$_POST['phone'];
                        if($map!=""&& $name!="" && $email!="" && $subject!="" && $message!="" && $phone!=""){
                            $query =" UPDATE contacts SET map='$map',name='$name', email='$email' ,subject='$subject' ,message='$message' ,phone='$phone' WHERE id='$id'"; // variable
                            $result =mysqli_query($conn, $query);
                            if($result){
                                echo " <span style='color:green' class='bg-success text-white px-5'>data is  submitted</span>";
                                // header('Refresh: 0.34; url=manage-skills.php');
                                ?>
                                <meta http-equiv="refresh" content=" 0 ; url = manage-contacts.php" />
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputText1" class="form-label">Map
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputText1"
                                                aria-describedby="textHelp" value="<?php  echo $data['map']?>" name="map">
                                        </div>
                                        <!-- /.form-group -->
                                       
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">Name
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['name']?>" name="name">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">Email
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['email']?>" name="email">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">Phone
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['phone']?>" name="phone">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">subject
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['subject']?>" name="subject">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputText1" class="form-label">Message
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['message']?>" name="message">
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <div class="button">
                                    <button type="submit" name="submit" class="btn  btn-primary"> submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../../inc/footer.php"); ?>