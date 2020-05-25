<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3><br>Joana da Silva</h3>
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
                    <h3>Sobre minhas aulas</h3>
                    <form action="/descricao">
                        <div class="form-group">
                        <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="4"><?php echo $_SESSION['descricao'] ?></textarea>
                        </div>
                        
                        <button class="boxed_btn" type="submit">Salvar</button>
                    </form>
                    <p> </p>

                </div>

                <?php if ($_SESSION['perfil'] == 'professor') : ?>
                    <div class="single_courses">
                        <h3 class="second_title">Escolha um pacote de horas</h3>
                    </div>
                    <form action="/mercadoPago" method="POST">
                        <div class="main">

                            <div class="radioholder">
                                <input type="radio" name="pacote" value="80" checked>
                                <label for="pt_website">Pacote 2H, R$ 80</label>
                            </div>
                            <div class="radioholder">
                                <input type="radio" name="pacote" value="40">
                                <label for="pt_mobile">Pacote 1H, R$ 40</label>
                            </div>
                            <div class="radioholder">
                                <input type="radio" name="pacote" value="150">
                                <label for="pt_application">Pacote 5H, R$ 150</label>
                            </div>
                            <div class="radioholder">
                                <input type="radio" name="pacote" value="110">
                                <label for="pt_illustration">Pacote 3H, R$ 110</label>
                            </div>
                            <?php //echo //print_r($this->view->perfil); 
                            ?>
                            <p>Após você escolher o pacote e finalizar o pagamento será liberado o chat com o professor para juntos decidirem onde serão as aulas. Bons estudos!</p>
                        </div>

                        <button type="submit" class="boxed_btn">Comprar</button>
                    </form>
                <?php endif; ?>
            </div>


            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="<?php echo $_SESSION['img'] ?>" alt="">

                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">

                            <div class="name">
                                <form enctype="multipart/form-data" action="/atualizar">
                                    <div class="form-group" >
                                        <label for="nome">Nome</label>
                                        <h3><input type="text" class="form-control" id="nome" name="nome" value="<?php echo $_SESSION['nome'] ?>"></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <h3><input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="CPF">CPF</label>
                                        <h3><input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $_SESSION['cpf'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="RG">RG</label>
                                        <h3><input type="text" class="form-control" id="rg" name="rg" value="<?php echo $_SESSION['rg'] ?>" disabled></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="sexo">Sexo</label>
                                        <h3><input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $_SESSION['sexo'] ?>"></h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <h3><input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'] ?>"></h3>
                                    </div>
                                </form>
                                

                            </div>
                        </div>
                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
