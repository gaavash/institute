<?php include("connection/config.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Task Management system</title>
</head>

<body>

    <section class="p-5">
        <div class="container">
            <div class="form w-25 mx-auto">
                <h5 class="py-5">Task Management system</h5>

                <?php 
            if(isset($_POST['submit'])){
                $name = $_POST['name'];

              $filename=$_FILES['dataFile']['name'];
              $filesize=$_FILES['dataFile']['size'];

              $explode = explode('.', $filename);
              $firstname = strtolower($explode[0]);
              $ext = strtolower($explode[1]);
              $rep= str_replace(' ', '' ,$filename);

          $finalfilename= $rep.time(). '.'.$ext;

          if($filesize>20000){
            if($ext=="jpg"|| $ext=="png"){
                if(move_uploaded_file($_FILES['dataFile']['tmp_name'], 'uploads/'.$finalfilename)){
                    $query ="INSERT INTO filemanager (name, filelink, type) 
                    VALUES ('$name','$finalfilename', '$ext')"; // variable
                   
                    $result= mysqli_query ($conn, $query); // connect to database
                    if($result){
                        echo "file is submitted";
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
                        <a href="index.php" class="btn btn-sm btn-info">Sign In</a>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>