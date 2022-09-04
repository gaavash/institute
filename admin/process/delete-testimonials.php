<?php
include("../../connection/config.php");
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];

$query=" delete from testimonials where id ='$id'";
$result= mysqli_query($conn, $query);
if($result){
    header('Refresh: 0; url=../pages/testimonials/manage-testimonials.php');
}
else{
    echo "your data is not delete";
}
 }

?>