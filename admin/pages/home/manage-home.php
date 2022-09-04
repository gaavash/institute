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
            <h1>Manage Home</h1>
            <a href="add-home.php" class="btn btn-primary"> add home</a>
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
                    <th>Image</th>
                    <th>Home Description</th>
            
                    <th>Sub Title</th>
                    <th>Sub Description</th>
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
             
                 $sql = "SELECT * FROM homes order by id DESC  LIMIT $start_from, $limit";  
                 $rs_result = mysqli_query($conn, $sql); 
                 $i=0;
                 while ($data = mysqli_fetch_array( $rs_result)){
                 ?>
                 <tr>
                     <th scope="row"> <?php echo ++$i; ?> </th>
                     <td><img src="<?php echo"../../../uploads/".$data['img']; ?>" alt="" width="100" height="100"></td>
        
                     <td><?php echo $data['home_desc']; ?></td>
                     <td><?php echo $data['sub_title']; ?></td>
                     <td><?php echo $data['sub_desc']; ?></td>
                    
                     <td>
                         <a href="edit-home.php?id=<?php echo $data['id']; ?>" class=" btn btn-info"> Edit</a>
                         <a href="../../process/delete-home.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return checkDelete()">
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
                    <th>Image</th>
                    <th>Home Description</th>
            
                    <th>Sub Title</th>
                    <th>Sub Description</th>
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