<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3>Joana da Silva</h3>
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
                    <h3>Para comprar o pacote de aulas com <?php echo $this->view->pagamento['descricao']; ?> clique em comprar</h3>
                    <form action="/comprar" id="pagamento" method="POST">
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
                        <input type="hidden" name="aula" value="<?php echo $this->view->pagamento['materia']?>">
                        <input type="hidden" name="professor" value="<?php echo $_GET['professor'] ?>">
                        <button type="submit" class="btn_boxed">Adicionar a compra</button>


                    </form>
                </div>
            </div>


            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="img/latest_blog/video.png" alt="">

                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">

                            <div class="name">
                                <h3>Joana da Silva</h3>

                            </div>
                        </div>
                        <p class="text_info">
                            Our set he for firmament morning sixth subdue darkness creeping gathered divide our let
                            god moving. Moving in fourth air night bring upon you’re it beast let you dominion
                            likeness open place day
                        </p>

                        <ul>
                            <li><a href="#"> <i class="fa fa-envelope"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="ti-linkedin"></i> </a></li>
                            <li><a href="#"><i class="ti-facebook"></i>
                            <li><a href="#"><i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php print_r($this->view->pagamento); ?>