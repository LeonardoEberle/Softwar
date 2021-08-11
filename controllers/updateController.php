<?php
include_once '../connect.php';

$id = $_POST['id'];
$name = $_POST['nome'];
$descricao = $_POST['descr'];
$preco = $_POST['preco'];
$data = date("Y-m-d H:i:s");

$sql = "UPDATE `produto` SET `Nome`= '$name',`Descricao`= '$descricao',`Preco`= $preco,`Data`= '$data' WHERE ID = $id";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<script type="text/javascript">window.location.href = "../edite.php?id='.$id.'";alert("Sucesso");</script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }