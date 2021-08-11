<?php
include_once '../connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `produto` WHERE `ID`= $id;";

if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
 echo '<script type="text/javascript">window.location.href = "../view.php";alert("Sucesso");</script>'; 

} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}