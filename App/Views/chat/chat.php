<div id="chatEtc" class="container paddingTop">
	<div class="messaging">
		<div class="inbox_msg">
			<div class="inbox_people">
				<div class="headind_srch">
					<div class="recent_heading">
						<h4>Conversas recentes</h4>
					</div>
				</div>
				<div class="chat_list active_chat"></div>
				<div class="inbox_chat">
					<div id="chatPersons"></div>
				</div>
			</div>
			<div class="mesgs">
				<!-- div ajax do chat para funcionamento -->
				<div id="msgBox">
					<div id="chat" onload="ajax()" class="msg_history chat">
					</div>
					<!-- fim div funcionamento do chat -->
				</div>
				<div class="type_msg">
					<!-- inicio form submit chat -->
					<form id="formId" class="msgSender" action="/sendMsg" method="POST">
						<div id="inpt" class="input_msg_write buttonBox">
							<input type="hidden" id="idRecebedor" name="idRecebedor">

							<input type="text" class="write_msg" name="msg" id="inputMsg" autocomplete="off" placeholder="Type a message" />
							<button class="buttonMsg" id="buttonMsg" type="submit">
								<div class="backgroundButton">
									<div class="msg_send_btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></div>
								</div>
							</button>
						</div>

					</form>
					<!-- fim form submit chat -->
				</div>
			</div>
		</div>
	</div>
</div>
