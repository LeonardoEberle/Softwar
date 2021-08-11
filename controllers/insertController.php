<?php
include_once '../connect.php';

$name = $_POST['nome'];
$descricao = $_POST['descr'];
$preco = $_POST['preco'];
$data = date("Y-m-d H:i:s");

$sql = "INSERT INTO `produto`( `Nome`, `Descricao`, `Preco`, `Data`) VALUES ('$name','$descricao',$preco, '$data')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  echo '<script type="text/javascript">window.location.href = "../cadastro.php";alert("Sucesso");</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}