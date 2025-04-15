<?php
include 'conexao.php';
include 'cabecalho.php';
// Executa a letura do usuário no banco de dados
$usuario = $bancoSarah->query("select * from usuario where id='{$_GET['id']}'")->fetchAll();
?>
<div class="container">
    <h1>Edição de usuário</h1>
    <form>
        <?php if (isset($_GET['erro'])) : ?>
            <?php echo $_GET['erro']; ?>
        <?php endif; ?>

        <div class="col-md-4 mb-3">
            <label>usuário:</label>
            <input type="text" value="<?php echo $usuario['login'] ?>" name="usuario" />
        </div>
        <div class="col-md-4 mb-3">
            <label>senha:</label>
            <input type="password" value="<?php echo $usuario['senha'] ?>" name="usuario" />
        </div>
    </form>
    <a href="usuarios.php" class="btn btn-primary">Voltar</a>
</div>

<?php  include 'rodape.php'; ?>