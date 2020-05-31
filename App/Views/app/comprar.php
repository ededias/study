<div class="courses_details_banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="course_text">
                    <h3><?php echo $this->view->comprar['professor']['nome'] ?></h3>
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
                    <h3>Para finalizar sua compra clique em comprar</h3>
                    <form action="/confirmarPagamento" method="POST">
                        <input type="hidden" name="aluno" value="<?php echo $this->view->comprar['usuario'] ?>">
                        <input type="hidden" name="professor" value="<?php echo $this->view->comprar['professor']['idUsuario'] ?>">
                        <input type="hidden" name="valor" value="<?php echo $this->view->comprar['professor']['valor'] ?>">
                        <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $this->view->comprar['api'] ?>" data-button-label="Comprar">
                        </script>
                    </form>
                </div>
            </div>


            <div class="col-xl-5 col-lg-5">
                <div class="courses_sidebar">
                    <div class="video_thumb">
                        <img src="<?php echo $this->view->comprar['professor']['img'] ?>" alt="">

                        </a>
                    </div>
                    <div class="author_info">
                        <div class="auhor_header">

                            <div class="name">
                                <h3><?php echo $this->view->comprar['professor']['nome']; ?></h3>

                            </div>
                        </div>
                        <p class="text_info">
                            <?php echo $this->view->comprar['professor']['descricaoPerfil']; ?>
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

