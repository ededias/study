 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg overlay2">
     <h3>Encontre seu curso</h3>
 </div>
 <!-- bradcam_area_end -->

 <!-- popular_courses_start -->
 <div class="popular_courses plus_padding">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="section_title text-center mb-100">
                     <h3>Todos os cursos disponíveis</h3>
                     <p>Digite no campo abaixo qual matéria você está procurando!</p>
                 </div>
             </div>
         </div>
         <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

         <form class="searchform group">
             <label for="search-box">
                 <span class="fa fa-2x fa-search"></span>
             </label>

             <input type="search" id="search-box" placeholder="Pesquise seu curso..">
         </form>

     </div>
     <div class="all_courses">
         <div class="container">
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row">
                         <?php $result = $this->view->cursos;
                            foreach ($result as $chave => $valor) :
                            
                            ?>
                             <div class="col-xl-4 col-lg-4 col-md-6">
                                 <div class="single_courses">
                                     <div class="thumb">
                                         <a href="/pagamento?professor=<?php echo $valor['idUsuario'] ?>">
                                             <img src="<?php echo $valor['img'] ?>" alt="">
                                         </a>
                                     </div>
                                     <div class="courses_info">
                                         <span><?php echo $valor['nome'] ?></span>
                                         <h3><a href="/pagamento?professor=<?php echo $valor['idUsuario'] ?>">Clique no perfil para entrar em contato!</a></h3>
                                         <div class="star_prise d-flex justify-content-between">
                                             <div class="prise">
                                                 <span class="active_prise">
                                                 <?php echo $valor['valor'] ?>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         <?php endforeach; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- popular_courses_end-->