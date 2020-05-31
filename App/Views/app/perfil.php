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

                    <form method="post" action="/atualizar">
                        <?php if ($_SESSION['perfil'] != 'aluno') : ?>
                            <label for="descricaoaula">
                                <h3>Sobre minhas aulas</h3>
                            </label>
                            <div class="form-group">
                                <textarea class="form-control" name="descricaoaula" id="descricaoaula" cols="30" rows="4"><?php if (!isset($this->view->perfil['descricaoAula'])) $valor = '';
                                                                                                                            else $valor = $this->view->perfil['descricaoAula'];
                                                                                                                            echo $valor ?></textarea>
                            </div>
                        <?php endif; ?>
                        <label for="descricaoperfil">
                            <h3>Sobre mim</h3>
                        </label>
                        <div class="form-group">
                            <textarea class="form-control" name="descricaoperfil" id="descricaoperfil" cols="30" rows="5"><?php if (!isset($this->view->perfil['descricaoPerfil'])) $valor = '';
                                                                                                                            else $valor = $this->view->perfil['descricaoPerfil'];
                                                                                                                            echo $valor ?></textarea>
                        </div>

                        <?php if ($_SESSION['perfil'] != 'aluno') : ?>
                            <label for="valoraula">
                                <h3>Insira o valor hora de sua aula</h3>
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="valoraula" id="valoraula" type="text" placeholder="ex: R$50,00" value="<?php 
                                                                                                                                            if (!isset($this->view->perfil['valor'])) 
                                                                                                                                                $valor = 0;
                                                                                                                                            else 
                                                                                                                                                $valor = $this->view->perfil['valor'];
                                                                                                                                                echo "R$ {$valor},00" ?>">
                            </div>
                            <div class="form-group">
                                <label for="aulas">
                                    <h3>Selecione a matéria</h3>
                                </label>
                                <select id="aulas" name="aula" class="form-control">
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
                        <?php endif; ?>
                        <input type="hidden" name="idPreco" value="<?php if (!isset($this->view->perfil['idPreco'])) $valor = '';
                                                                    else $valor = $this->view->perfil['idPreco'];
                                                                    echo $valor; ?>">
                        <input type="hidden" name="idDescricao" value="<?php if (!isset($this->view->perfil['idDescricao'])) $valor = '';
                                                                        else $valor = $this->view->perfil['idDescricao'];
                                                                        echo $valor; ?>">
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
                                <form method="POST" enctype="multipart/form-data" action="/atualizarPerfil">
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
                                        <h3><input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $this->view->perfil['sexo'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" class="form-control" id="senha">
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
