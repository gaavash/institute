<?php
include("../../connection/config.php");
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];

$query=" delete from navbars where id ='$id'";
$result= mysqli_query($conn, $query);
if($result){
    header('Refresh: 0; url=../pages/navbar/manage-navbar.php');
}
else{
    echo "your data is not delete";
}
 }

?>