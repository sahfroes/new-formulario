<?php
include 'conexao.php';
include 'cabecalho.php';



$sql = 'SELECT id, login, senha FROM usuario ORDER BY id';

?>
<div class="container">
    <h1>Listagem de Usuários</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancoSarah->query($sql) as $row): ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['login']; ?>
                    </td>
                    <td>
                        <?php echo $row['senha']; ?>
                    </td>
                    <td>
                        <a href="editar-usuario.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>



<?php  include 'rodape.php'; ?>