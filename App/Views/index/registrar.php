<?php
$msg = false;
$p = false;
$f = false;
$s = false;

if (isset($_GET)) {
    if (isset($_GET['s']) == 's') {
        $s = "s";
    }
    if (isset($_GET['p']) == 'p') {
        $p = 'p';
    }
    if (isset($_GET['f']) == 'f') {
        $f = 'f';
    }
}
?>

<div class="container paddingTop">
    <form id="formF" enctype="multipart/form-data" action="/salvar" method="post">

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h1 class="" type="" data-toggle="" data-target="" aria-expanded="" aria-controls="">
                        Cadastrar
                    </h1>
                </div>


                <div class="card-body">
                    <div class="panel-body">
                        <?php if ($p != false) : ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Erro!</strong>Por favor, selecione um perfil.
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        <?php endif ?>
                        <label>Você é professor ou aluno?</label>
                        <div class="form-group">
                            <input type="radio" name="perfil" value="aluno" id="aluno" class="with-gap">
                            <label for="aluno">Aluno</label>
                            <input type="radio" name="perfil" value="professor" id="professor" class="with-gap">
                            <label for="professor">Professor</label>
                        </div>
                        <label for="nome">Nome completo</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="nome" class="form-control" name="nome" required>

                            </div>
                        </div>

                        <label for="email">Email</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" id="email" class="form-control" name="email" required>

                            </div>
                        </div>
                        <?php if ($msg != false) : ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Erro!</strong> As senhas não são idênticas.
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        <?php endif ?>
                        <label for="senha">Senha</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" id="senha" class="form-control" name="senha" required>

                            </div>
                        </div>
                        <label for="rpsenha">Confirmar senha</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" id="rpsenha" class="form-control" name="rpsenha" required>

                            </div>
                        </div>
                        <label for="telefone">Telefone</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" id="telefone" class="form-control" name="telefone" required>

                            </div>
                        </div>
                        <label for="CPF">CPF</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" id="CPF" class="form-control" name="CPF" required>

                            </div>
                        </div>
                        <label for="rg">Documento de identidade</label>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="rg" required>

                            </div>
                        </div>
                        <label>Sexo</label>
                        <div class="form-group">
                            <input type="radio" name="sexo" value="masculino" id="masculino" class="with-gap">
                            <label for="masculino">Masculino</label>
                            <input type="radio" name="sexo" value="feminino" id="feminino" class="with-gap">
                            <label for="feminino">Feminino</label>
                        </div>
                        <label for="dataNas">Data de nascimento</label>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" class="form-control date" name="dataNas" required placeholder="Ex: 01/01/2020">
                            </div>
                        </div>
                        <label>Endereço</label>
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="tel" id="cep" name="cep" class="form-control" placeholder="Cep">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="endereco">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="tel" id="numero" name="numEnd" class="form-control" placeholder="N°">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="complemento" placeholder="Complemento">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="estado" name="estado" class="form-control" placeholder="Estado">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php if ($f != false) : ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Erro!</strong>Por favor, selecione uma foto.
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        <?php endif ?>

                        <div class="pt-3">
                            <label>Foto</label>
                            <div class="form-group">

                                <div class="form-line">
                                    <input type="file" name="imagem" placeholder="imagem" required id="imagemPF">
                                </div>

                            </div>
                        </div>

                    </div>
                    <button type="submit" class="boxed_btn">ENVIAR</button>

                </div>



            </div>
        </div>


    </form>
</div>