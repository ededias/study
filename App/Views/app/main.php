<?php if ($_SESSION['perfil'] != 'professor') {
  $param = 'Professores';
} else {
  $param = 'Alunos';
}
?>

<div class="popular_courses paddingTop">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="section_title text-center mb-100">
          <h3>
            <?php echo $param ?> com quais você tem horas aula</h3>
          <p></p>
        </div>
      </div>
    </div>

    <!-- inicio depoimentos -->
    <?php if (!isset($this->view->main)) : ?>
      <div class="section_title text-center mb-100">
        <h3 class="text-secondary">Humm... está tudo meio quieto por aqui que tal buscar um professor para te dar aula?<strong><a href="/cursos">Clique aqui</a></strong></h3>
        <p></p>
      </div>
    <?php elseif (isset($this->view->main)) : ?>
      <?php $result = $this->view->main; ?>

      <div class="all_courses">
        <div class="container">

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <div class="row">
                <?php foreach ($result as $chave => $valor) : ?>
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
                          <?php if (!empty($valor['valor'])) : ?>
                            <div class="prise">
                              <span class="active_prise">
                                R$ <?php echo $valor['valor'] ?>,00
                              </span>
                            </div>
                          <?php endif; ?>
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

    <?php endif; ?>

  </div>

</div>

<!-- Fim depoiments -->