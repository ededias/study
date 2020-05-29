<?php $url = $_SERVER['REQUEST_URI'] ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Study</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="css/nice-select.css">
  <link rel="stylesheet" type="text/css" href="css/flaticon.css">
  <link rel="stylesheet" type="text/css" href="css/gijgo.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/slicknav.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/meuCss.css">
  <link rel="stylesheet" href="css/chat.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div id="sticky-header" class="main-header-area menu">
        <div class="container-fluid p-0">
          <div class="row align-items-center no-gutters">
            <div class="col-xl-2 col-lg-2">
              <div class="logo-img">
                <a href="/main">
                  <img src="img/logo2.png" alt="">
                </a>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7">
              <div class="main-menu  d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a <?php if ($url == "/main") { ?> class="active" <?php } else {  ?> class="" <?php } ?> class="active" href="/main">Inicio</a></li>
                    <?php if ($_SESSION['perfil'] != 'professor') : ?>
                      <li><a <?php if ($url == "/cursos") { ?> class="active" <?php } else {  ?> class="" <?php } ?> href="/cursos">Cursos</a></li>
                    <?php endif; ?>
                    <li><a <?php if ($url == "/chat") { ?> class="active" <?php } else {  ?> class="" <?php } ?> href="/chat">Chat</a></li>
                    <li><a <?php if ($url == "/perfil") { ?> class="active" <?php } else {  ?> class="" <?php } ?> href="/perfil">Perfil</a></li>
                    <li><a href="/sair">Sair</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- conteudo php inicio -->

  <?php $this->content(); ?>

  <!-- conteudo php fim -->

  <!-- inicio Rodapé -->
  <footer class="footer footer_bg_1">
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget">
              <div class="footer_logo">
                <a href="#">
                  <img src="img/logo2.png" alt="">
                </a>
              </div>
              <p>
                Suba o primeiro degrau com fé. Não é necessário que você veja toda a escada. Apenas dê o primeiro passo.
                Martin Luther King Jr.
              </p>
              <div class="socail_links">
                <ul>
                  <li>
                    <a href="#">
                      <i class="ti-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="ti-twitter-alt"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <!-- <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
            <div class="footer_widget">
              <h3 class="footer_title">
                Cursos
              </h3>
              <ul>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#"> Photoshop</a></li>
                <li><a href="#">Illustrator</a></li>
                <li><a href="#">Adobe XD</a></li>
                <li><a href="#">UI/UX</a></li>
              </ul>

            </div>
          </div> -->
          <div class="footersobre col-xl-2 col-md-6 col-lg-2">
            <div class="footer_widget">
              <h3 class="footer_title">
                Sobre nós
              </h3>
              <ul>
                <li><a href="#">Quem somos?</a></li>
                <li><a href="#">Nossos valores</a></li>
                <li><a href="#">Precisando de ajuda?</a></li>

              </ul>
            </div>
          </div>

          <div class="footercontato col-xl-3 col-md-6 col-lg-3">
            <div class="footer_widget">
              <h3 class="footer_title">
                Contato
              </h3>
              <p>
                200, D-block, Curitiba-PR <br>
                +41 3333 8888 <br>
                study@contato.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right_text">
      <div class="container">
        <div class="footer_border"></div>
        <div class="row">
          <div class="col-xl-12">
            <p class="copy_right text-center">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fim rodape  -->




  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>
  <script src="js/chat/chatUpdate.js"></script>
  <script src="js/chat/chatsend.js"></script>
  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/ajax-pagamento.js"></script>
  <script src="js/main.js"></script>

  <script src="js/chat/chatPersons.js"></script>
  <script src="js/perfil.js"></script>

</body>

</html>