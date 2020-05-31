<?php

// realiza um foreach das pessoas para mostrar na tela
foreach ($this->view->renderPersons as $key => $data) { ?>

	<a id="boxpersons" data-idenviar="<?php echo $data['idUsuario'] ?>" href="/msg?idReceber=<?php echo $data['idUsuario'] ?>&idEnviar=<?php echo $_SESSION['idUsuario'] ?>">
		<div class="chat_list">

			<div class="chat_people">
				<div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></div>
				<div class="chat_ib">
					<h5><?php echo $data['nome']; ?>
						<span class="chat_date">Dec 25</span>
					</h5>
				</div>
			</div>

		</div>
	</a>

<?php } ?>
