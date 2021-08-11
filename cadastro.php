<?php
include_once './header.php';
?>
<section class="stca">
    <h1>Cadastrar Produto</h1>
    <form name="cad-prod" method="POST" action="./controllers/insertController.php">
        <div class="cad">
            <label>Nome</label><br><input type="text" name="nome" placeholder="Nome do produto">
            <br><br>
            <label>descrição</label><br><input type="text" name="descr" placeholder="descrição do produto" class="txtbox">
            <br><br>
            <label>preço</label><br><input type="number" name="preco" step=".01" placeholder="preço do produto">
            <br><br>
            <input type="submit" value="cadastrar" name="cadprod">
        </div>
    </form>
</section>

<?php
include_once './footer.php';
?>