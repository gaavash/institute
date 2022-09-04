<?php include("../../inc/header.php"); ?>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
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
                            <h1>Add Files Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">File Manager</li>
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
                $name = $_POST['name'];

              $filename=$_FILES['dataFile']['name'];
              $filesize=$_FILES['dataFile']['size'];

              $explode = explode('.', $filename);
              $firstname = strtolower($explode[0]);
              $ext = strtolower($explode[1]);
              $rep= str_replace(' ', ' ' ,$filename);

          $finalfilename= $rep.time(). '.'.$ext;

          if($filesize>20000){
            if($ext=="jpg"|| $ext=="png" || $ext=="webp"){
                if(move_uploaded_file($_FILES['dataFile']['tmp_name'], '../../../uploads/'.$finalfilename)){
                    $query ="INSERT INTO filemanager (name, filelink, type) 
                    VALUES ('$name','$finalfilename', '$ext')"; // variable
                   
                    $result= mysqli_query ($conn, $query); // connect to database
                    if($result){
                        ?>
                        <meta http-equiv="refresh" content=" 0 ; url = manage-files.php" />
    <?php
                    }
                    else {
                        echo "file is not submitted ";
                    }
                }
            }
            else{
             echo "File extension is not match ";
            }

          }else{
            echo "file size must me less 2MB";
          }


                // validation to input field
          
            }
            ?>
                      
                      <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">File Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="userHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File link</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dataFile">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../../inc/footer.php"); ?>