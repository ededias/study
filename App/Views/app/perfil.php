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
                    <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness open place day great wherein heaven sixth lesser subdue fowl male signs his day face waters itself and make be to our itself living. Fish in thing lights moveth. Over god spirit morning, greater had man years green multiply creature, form them in, likeness him behold two cattle for divided. Fourth darkness had. Living light there place moved divide under earth. Light face, fly dry us </p>
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

                    <form action="/processar_pagamento" method="POST">
                        <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $this->view->perfil['api']; ?>">
                        </script>
                    </form>

                    <button type="submit" class="boxed_btn">Comprar</button>
                </form>
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
                            <?php

                            echo $this->view->perfil["descricao"];

                            ?>
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


                        <!-- </div>
                        
                    <a href="#" class="boxed_btn">Buy Course</a>
                    <div class="feedback_info">
                        <h3>Write your feedback</h3>
                        <p>Your rating</p>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>
                        <i class="flaticon-mark-as-favorite-star"></i>

                        <form action="#">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Write your feedback"></textarea>
                            <button type="submit" class="boxed_btn">Submit</button>
                        </form>
                    </div> -->
                    </div>

                    <a href="#" class="boxed_btn">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
print_r($this->view->perfil);


?>