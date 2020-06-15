<?php require_once '../config.php'; ?>
<?php require_once '../process.php'; ?>

<?php include(HEADER_TEMPLATE); ?>

<div class="row justify-content-center">
    <form action="../process.php" method="post" class="needs-validation" novalidate>
        <div class="choices mt-3 mb-3">
            <h3>Tipo de Cadastro</h3>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="fisica" name="fisica" class="custom-control-input">
                <label class="custom-control-label" for="fisica">Pessoa Fisica</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="juridica" name="juridica" class="custom-control-input" checked>
                <label class="custom-control-label" for="juridica">Pessos Juridica</label>
            </div>
        </div>

        <div class="register">
            <h3>Cadastro</h3>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" value="" placeholder="Nome da Empresa">
                </div>
            </div>
            <div class="form-group row">
                <label for="comercial_name" class="col-sm-2 col-form-label col-form-label-sm">Nome Fantasia</label>
                <div class="col-sm-10">
                    <input type="text" name="comercial_name" id="comercial_name" class="form-control" placeholder="Nome Fantasia">
                </div>
            </div>
            <div class="form-group row">
                <label for="cnpj" class="col-sm-2 col-form-label col-form-label-sm">CNPJ</label>
                <div class="col-sm-10">
                    <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label col-form-label-sm">Munícipio</label>
                <div class="col-sm-10">
                    <input type="text" name="city" id="city" class="form-control" placeholder="Cidade">
                </div>
            </div>
            
            <h5>Contato</h5>
            <div class="form-group row">
                <label for="name_contact" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="name_contact" id="name-contact" class="form-control" placeholder="Nome do Contato" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Telefone</label>
                <div class="col-sm-10">
                    <input type="tel" name="phone" id="phone" class="form-control" value="" placeholder="Telefone" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Salvar</button>
        </div>
    </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>

<style>
.main .needs-validation {
    width: 600px;
}
</style>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
  }, false);
})();
</script>