<?php
include("../../connection/config.php");
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];

$query=" delete from portfolios where id ='$id'";
$result= mysqli_query($conn, $query);
if($result){
    header('Refresh: 0; url=../pages/portfolios/manage-portfolios.php');
}
else{
    echo "your data is not delete";
}
 }

?>