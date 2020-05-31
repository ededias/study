<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3><?php echo $this->view->pagamento["nome"] ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="courses_details_info">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="single_courses">
                    <?php if ($_SESSION['perfil'] == 'professor') : ?>
                        <h3><a href="/chat">Inicie a conversa com <?php echo $this->view->pagamento['nome'] ?></a></h3>
                    <?php elseif ($_SESSION['perfil'] == 'aluno') :
                    ?>
                        <h3>Sobre minhas aulas</h3>
                        <p> <?php echo $this->view->pagamento['descricaoAula']; ?>

                        </p>
                        <form action="/comprar" id="pagamento" method="POST">
                            <div class="main">

                                <div class="radioholder">
                                    <input type="radio" name="pacote" value="<?php
                                                                                echo $this->view->pagamento["valor"] * 2; ?>" checked>
                                    <label for="pt_website">Pacote 2H, R$ <?php
                                                                            echo $this->view->pagamento["valor"] * 2; ?></label>
                                </div>
                                <div class="radioholder">
                                    <input type="radio" name="pacote" value="<?php
                                                                                echo $this->view->pagamento["valor"] * 1; ?>">
                                    <label for="pt_mobile">Pacote 1H, R$ <?php
                                                                            echo $this->view->pagamento["valor"] * 1; ?></label>
                                </div>
                                <div class="radioholder">
                                    <input type="radio" name="pacote" value="<?php
                                                                                echo $this->view->pagamento["valor"] * 5; ?>">
                                    <label for="pt_application">Pacote 5H, R$ <?php
                                                                                echo $this->view->pagamento["valor"] * 5; ?></label>
                                </div>
                                <div class="radioholder">
                                    <input type="radio" name="pacote" value="<?php
                                                                                echo $this->view->pagamento["valor"] * 3; ?>">
                                    <label for="pt_illustration">Pacote 3H, R$ <?php
                                                                                echo $this->view->pagamento["valor"] * 3; ?></label>
                                </div>

                                <p>Após você escolher o pacote e finalizar o pagamento será liberado o chat com o professor para juntos decidirem onde serão as aulas. Bons estudos!</p>
                            </div>
                            <input type="hidden" name="aula" value="<?php echo $this->view->pagamento['materia'] ?>">
                            <input type="hidden" name="professor" value="<?php echo $_GET['professor'] ?>">
                            <button type="submit" class="boxed_btn">Adicionar a compra</button>


                        </form>
                    <?php endif; ?>
                </div>

            </div>


            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="<?php echo $this->view->pagamento['img'] ?>" alt="">

                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">

                            <div class="name">
                                <h3><?php echo $this->view->pagamento['nome']; ?></h3>

                            </div>
                        </div>
                        <p class="text_info">
                            <?php echo $this->view->pagamento['descricaoPerfil']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
