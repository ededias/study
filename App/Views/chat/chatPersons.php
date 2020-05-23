<?php 
// realiza um foreach das pessoas para mostrar na tela
foreach ($this->view->renderPersons as $key => $data) { ?>


  <div class="chat_people">
    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
    <div class="chat_ib">
      <h5 ><?php echo $data['nome']; ?><div id="idEnviar" style="display:none" onload="divValue()"><?php echo $data['idUsuario'] ?></div><span class="chat_date">Dec 25</span></h5>
    </div>
  </div>


<?php } ?>