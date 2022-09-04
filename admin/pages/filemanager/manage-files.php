<?php include("../../inc/header.php"); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("../../inc/navbar.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("../../inc/sidebar.php"); ?>
  <style>
    .card-body{
      overflow: scroll;
    }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Files</h1>
            <a href="add-files.php" class="btn btn-sm btn-primary"> Add File</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>file link</th>
                    <th>type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php
                 
                 $limit = 8;  // Number of entries to show in a page. Look for a GET variable page if not found default is 1.     
                 if (isset($_GET["page"])) { 
                 $pn  = $_GET["page"]; 
                 } 
                 else { 
                 $pn=1; 
                 };  
             
                 $start_from = ($pn-1) * $limit;  
             
                 $sql = "SELECT * FROM filemanager order by id DESC  LIMIT $start_from, $limit";  
                 $rs_result = mysqli_query($conn, $sql); 
                 $i=0;
                 while ($data = mysqli_fetch_array( $rs_result)){
                 ?>
                 <tr>
                     <th scope="row"> <?php echo ++$i; ?> </th>
                     <td> <?php echo $data['name']; ?> </td>
                     <td><img src="<?php echo"../../../uploads/". $data['filelink']; ?>" alt="" width="100" height="100"></td>
                     <td><?php echo $data['type']; ?></td>
                     <td>
                         
                         <a href="../../process/delete-files.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return checkDelete()">
                             Delete</a>
                     </td>
                 </tr>
                 <?php

           }
                 ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>S.N</th>
                    <th>Name</th>
                    <th>file link</th>
                    <th>type</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include("../../inc/footer.php"); ?>