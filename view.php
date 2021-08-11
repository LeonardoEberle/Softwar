<?php
include_once './header.php';
include_once './connect.php';

$sql = "SELECT * FROM `produto`";
$list = mysqli_query($conn, $sql);
?>

<style>

</style>

<section class="stca">
    <h1>Listar Produto</h1>
    <table border="1px">

        <tr>
            <th>ID</th>    
            <th>Nome</th>
            <th>descrição</th>
            <th>preço</th>
            <th>Data</th>
            <th>Ação</th>
        </tr>
        <?php foreach($list as $row): ?>
            <tr>
                <td><?= $row['ID']; ?></td>
                <td><?= $row['Nome']; ?></td>
                <td><?= $row['Descricao']; ?></td>
                <td><?= $row['Preco']; ?></td>
                <td><?= $row['Data']; ?></td>
                <td>
                    <a href="edite.php?id=<?=$row['ID'];?>">Edite</a>
                    <span> / </span>
                    <a  href="controllers/deleteController.php?id=<?=$row['ID'];?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?php
include_once './footer.php';
?>