<?php require_once 'config.php'; ?>
<?php require_once 'process.php'; ?>

<?php include(HEADER_TEMPLATE); ?>


<?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>" role="alert">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<div class="row justify-content-center">
    <div class="container home">
        <h3>Cadastro simples de usuários</h3>
        <p>Bem vindo ao sistema de cadastro de usuários.</p>
    </div>
    <div class="container m-3">
        <a href="register" class="btn btn-primary btn-lg btn-block" role="button">Cadastrar novo Usuário Pessoa Juridica</a>
        <a href="register/fisica.php" class="btn btn-primary btn-lg btn-block" role="button">Cadastrar novo Usuário Pessoa Fisica</a>
        <a href="register/list.php" class="btn btn-secondary btn-lg btn-block" role="button">Lista de Usuários</a>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>