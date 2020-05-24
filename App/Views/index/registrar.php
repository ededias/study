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
                        Qual teu tipo de conta?
                        <div class="form-group">
                            <input type="radio" name="perfil" value="aluno" id="aluno" class="with-gap">
                            Aluno
                            <input type="radio" name="perfil" value="professor" id="professor" class="with-gap">
                            Professor
                        </div>
                        Nome completo
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nome" required>

                            </div>
                        </div>

                        Email
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" required>

                            </div>
                        </div>
                        senha
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="senha" required>

                            </div>
                        </div>
                        Repitir senha
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="rpsenha" required>

                            </div>
                        </div>
                        Telefone
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="telefone" required>

                            </div>
                        </div>
                        CPF
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="CPF" required>

                            </div>
                        </div>
                        Documento de identidade
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="tel" class="form-control" name="rg" required>

                            </div>
                        </div>
                        Sexo
                        <div class="form-group">
                            <input type="radio" name="sexo" value="masculino" id="male" class="with-gap">
                            Masculino
                            <input type="radio" name="sexo" value="feminino" id="female" class="with-gap">
                            Feminino
                        </div>
                        Data de nascimento
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" class="form-control date" name="dataNas" required placeholder="Ex: 01/01/2020">
                            </div>
                        </div>
                        Endereço
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



                        <div class="pt-3">
                            <div class="form-group">

                                <div class="form-line">
                                    <input type="file" name="imagem" id="imagemPF">
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