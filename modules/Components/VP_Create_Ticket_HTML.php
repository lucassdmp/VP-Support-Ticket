<?php

class VP_Create_Ticket_HTML{
    static function VP_Ticket_Page_Html(){
        $current_user = wp_get_current_user();
        $current_user_id = $current_user->ID;
        ?>
        <div class="VP_ticket_wrap">
            <form method="post" action="../VP_Post_Ticket.php">
                <h1>APTMD Suporte</h1>
                <p>Por favor, preencha o formulário abaixo para abrir um chamado.</p>

                <label for="VP_ticket_title">Email</label>
                <input placeholder="Teu Email para avisarmos quando teu chamado houver sido respondido" 
                name="VP_ticket_email" type="text" class="VP_ticket_input" required/>
                
                <label for="VP_ticket_title">Descrição</label>
                <textarea placeholder="Descreva teu problema em detalhes aqui..." 
                name="VP_ticket_content" class="VP_ticket_input VP_textarea" rows="5" cols="30" required></textarea>
            
                <label for="VP_ticket_title">Tipo:</label>
                <select name="VP_ticket_type" class="VP_ticket_input" required> 
                    <?php
                        foreach(VP_Field_Definition::$TICKETTYPE as $key => $value){
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                    ?>
                </select>

                <input type="hidden" name="VP_userid" value="<?php echo $current_user_id != 0 ? $current_user_id : 0?>">

                <input type="submit" name="submit" id="submit" class="VP_ticket_submit" value="Abrir Chamado">  
            </form>
        </div>
        <?php
    }
}