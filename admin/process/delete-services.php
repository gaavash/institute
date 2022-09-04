<?php
include("../../connection/config.php");
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];

$query=" delete from services where id ='$id'";
$result= mysqli_query($conn, $query);
if($result){
    header('Refresh: 0; url=../pages/services/manage-services.php');
}
else{
    echo "your data is not delete";
}
 }

?>