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
                            <h1>Add Portfolios Form</h1>
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
                        $sub_desc= $_POST['sub_desc'];
                        $img= $_POST['img'];
                        $class= $_POST['class'];
                        $sub_title= $_POST['sub_title'];
                        if($img!="" && $sub_desc!="" && $class!="" && $sub_title!=""){
                            $query ="INSERT INTO portfolios (  sub_desc, img , sub_title , class)
                             VALUES ('$sub_desc','$img','$class','$sub_title')"; 
                            $result =mysqli_query($conn, $query);
                            if($result){
                                echo " <span style='color:green' class='bg-success text-white px-5'>data is  submitted</span>";
                                // header('Refresh: 0.34; url=manage-skills.php');
                                ?>
                                <meta http-equiv="refresh" content=" 0 ; url = manage-portfolios.php" />
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
                                    <div class="col-md-12">
                                
                                        <!-- /.form-group -->
                                       
                                            <label for="exampleInputText1" class="form-label">Sub Description
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputText2"
                                                aria-describedby="textHelp" value="" name="sub_desc">
                                        
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-12">
                                
                                        <!-- /.form-group -->
                                       
                                            <label for="exampleInputText1" class="form-label">Sub Title
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputText2"
                                                aria-describedby="textHelp" value="" name="sub_title">
                                        
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-12">
                                            <label for="exampleInputText1" class="form-label">Category :
                                                </label>
                                                <table>
                                                    <tr>
                                                    <td><input type="radio" value="app" name="class">App</td>
                                                    </tr>
                                                    <tr>
                                                    <td><input type="radio" value="web" name="class">Websites</td>
                                                    </tr>  
                                                    <tr>
                                                    <td><input type="radio" value="card" name="class">Graphics</td>
                                                    </tr>
                                                </table>
                                        </div>
                             
                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Browse Image
                                            </button> -->
                                            
                                            <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog modal-m" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Choose Image</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    
                                                                    <style>
                                                                        [type=radio]:checked+img {
                                                                            outline: 2px solid #f00;
                                                                        }
                                                                        </style>

<?php
                                                            $select_query = "SELECT * FROM filemanager";
                                                            $select_result = mysqli_query($conn, $select_query);
                                                            $i = 0;
                                                            while ($data_select = mysqli_fetch_array($select_result)) {
                                                                $i++;
                                                                ?>
                                                                <label>
                                                                    <input type="radio" name="img" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
                                                                    <img src="<?php echo "../../../uploads/" . $data_select['filelink']; ?>" alt="" height="100px;" width="100px;" style="margin-right:20px;">
                                                                </label>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="firstFunction()">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Bootstrap modal end -->

                                <div class="form-group col-12 mb-0">
                                    <label class="col-form-label">Image</label>
                                    <!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
                                </div>

                                <div class="input-group mb-3 col-12">
                                    <input id="sliderbox" type="text" class="form-control" name="img" readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
                                        </button>
                                    </div>
                                </div>
                                        <!-- /.col -->
                                    </div>
                                  
                                <div class="button">
                                    <button type="submit" name="submit"class="btn btn-primary"> submit</button>
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