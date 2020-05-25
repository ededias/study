<?php
// realiza um foreach das mensagens 
foreach ($this->view->updateMsg as $key => $data) { ?>

    <div class="outgoing_msg">
        <div class="sent_msg">
            <p class="chat"><?php echo ($data['chat']); ?></p>
            <span class="time_date"> <?php echo $data["data"] ?> </span>
        </div>
    </div>

<?php } ?>
