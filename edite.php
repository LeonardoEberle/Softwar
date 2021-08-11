<?php
include_once './header.php';
include_once './connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `produto` WHERE ID = $id";
$list = mysqli_query($conn, $sql);

foreach($list as $row){
}

?>
<section class="stca">
    <h1>Editar Produto</h1>
    <form name="cad-prod" method="POST" action="./controllers/updateController.php">
        <div class="cad">
            <input type="hidden" name="id" value="<?= $row['ID']; ?>">
            <label>Nome</label><br><input value="<?= $row['Nome']; ?>" type="text" name="nome" placeholder="Nome do produto">
            <br><br>
            <label>descrição</label><br><input value="<?= $row['Descricao']; ?>" type="text" name="descr" placeholder="descrição do produto" class="txtbox">
            <br><br>
            <label>preço</label><br><input value="<?= $row['Preco']; ?>" type="number" name="preco" step=".01" placeholder="preço do produto">
            <br><br>
            <input type="submit" value="cadastrar" name="cadprod">
        </div>
    </form>
</section>

<?php
include_once './footer.php';
?>