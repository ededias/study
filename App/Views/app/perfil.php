<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3><br><?php echo $this->view->perfil['nome']; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- bradcam_area_end -->

<div class="courses_details_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="single_courses">

                    <form action="/atualizar">
                        <label for="descricaoaula">
                            <h3>Sobre minhas aulas</h3>
                        </label>
                        <div class="form-group">
                            <textarea class="form-control" name="descricaoaula" id="descricaoaula" cols="30" rows="4"><?php echo $_SESSION['descricao'] ?></textarea>
                        </div>
                        <label for="descricaoperfil">
                            <h3>Descrição do Perfil</h3>
                        </label>
                        <div class="form-group">
                            <textarea class="form-control" name="descricaoperfil" id="descricaoperfil" cols="30" rows="5"></textarea>
                        </div>
                        <label for="valoraula">
                            <h3>Insira o valor hora de sua aula</h3>
                        </label>
                        <div class="form-group">
                            <input class="form-control" name="valoraula" id="valoraula" type="text" placeholder="ex: R$50,00" value="<?php
                            echo "R$ {$this->view->perfil["valor"]},00" ?>">
                        </div>
                        <div class="form-group">
                        <h3>Selecione a matéria</h3>
                        <select class="form-control">
                            <option value="2">Portugues</option>
                            <option value="3">Matemática</option>
                            <option value="4">História</option>
                            <option value="5">Geografia</option>
                            <option value="6">Fisíca</option>
                            <option value="7">Biologia</option>
                            <option value="8">Química</option>
                            <option value="9">Sociologia</option>
                            <option value="10">Fisolofia</option>
                        </select>
                        </div>                  
                        <button class="boxed_btn" type="submit">Salvar</button>
                    </form>
                    <p> </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="<?php echo $this->view->perfil['img'] ?>" alt="">

                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">

                            <div class="name">
                                <form enctype="multipart/form-data" action="/atualizar">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <h3><input type="text" class="form-control" id="nome" name="nome" value="<?php echo $this->view->perfil['nome'] ?>"></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <h3><input type="email" class="form-control" id="email" name="email" value="<?php echo $this->view->perfil['email'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="CPF">CPF</label>
                                        <h3><input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $this->view->perfil['cpf'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="RG">RG</label>
                                        <h3><input type="text" class="form-control" id="rg" name="rg" value="<?php echo $this->view->perfil['rg'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="sexo">Sexo</label>
                                        <h3><input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $this->view->perfil['sexo'] ?>"></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <h3><input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $this->view->perfil['telefone'] ?>"></h3>
                                    </div>
                                    <button class="boxed_btn" type="submit">Salvar</button>
                                </form>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php print_r($this->view->perfil) ?>