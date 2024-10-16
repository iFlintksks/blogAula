<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">
            <small>Preencha o formulário abaixo para fazer o seu cadastro</small>
        </p>

        <form name="cadastrar" method="POST" action="<?=URL?>/usuarios/cadastrar" class="mt-4">
            <div class="form-group">
                <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                <input type="text" name="nome" id="nome" class="form-control" require>

                <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                <input type="email" name="email" id="email" class="form-control" require>

                <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="senha" id="senha" class="form-control" require>

                <label for="confirma_senha">Confirme sua senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="confirma_senha" id="confirma_senha" class="form-control" require>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                </div>
                <div class="col">
                    <a href="#">Você já possui uma conta? Faça Login</a>
                </div>
            </div>
        </form>
    </div>
</div>