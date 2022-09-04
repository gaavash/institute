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
                            <h1>Edit Homes Form</h1>
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
                        
                        $query1= "SELECT * FROM sliders where id= $id";
                        $result1 =mysqli_query($conn, $query1);
                        $data= $result1->fetch_assoc();

                      }
                      ?>
                      <?php


                      if(isset($_POST['submit'])){
                   
                      
                        $title= $_POST['title'];
                        $home_desc= $_POST['home_desc'];
                        if($img!="" ){
                            $query =" UPDATE homes SET title='$title',home_desc='$home_desc' WHERE id='$id'"; // variable
                            $result =mysqli_query($conn, $query);
                            if($result){
                                echo " <span style='color:green' class='bg-success text-white px-5'>data is  submitted</span>";
                                // header('Refresh: 0.34; url=manage-skills.php');
                                ?>
                                <meta http-equiv="refresh" content=" 0 ; url = manage-slider.php" />
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
                                   
                                

                                <!-- Bootstrap modal end -->

                                
                                    <div class="col-md-6">
                                        <!-- /.form-group -->
                                        
                                            <label for="exampleInputText1" class="form-label">Title
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputText2"
                                                aria-describedby="textHelp" value="<?php  echo $data['title']?>" name="title">
                                        
                                        <!-- /.form-group -->
                                    </div>
                                  
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                                <label for="exampleInputText1" class="form-label">Sliders Description
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputText3"
                                                    aria-describedby="textHelp" value="<?php  echo $data['home_desc']?>" name="home_desc">
                                           
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
        <script>
            function firstFunction() {
        var selectedOption1 = document.querySelector('input[name=img]:checked').value;
        //var selectedOption = $("input:radio[name=filename]:checked").val()
        document.getElementById('sliderbox').value = selectedOption1; // use .innerHTML if we want data on label
    }
        </script>

        <?php include("../../inc/footer.php"); ?>