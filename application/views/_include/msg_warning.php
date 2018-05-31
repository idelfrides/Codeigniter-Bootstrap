
<br>
<div style="display: none;position: absolute; margin-left: 42%; width: 50%;" id="warningAlert" class="alert alert-warning alert-dismissible navbar-fixed-top mt-3 col-sm-12" role="alert">
    <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Warning</strong><br>Contato NÃO concluído!<br> Selecione um destinatário.
</div>
<br><br><br>

<?php

echo'<script type="text/javascript">
        $(document).ready(function(){
            $("#warningAlert").fadeIn(1000);
            $("#warningAlert").fadeOut(9000);
        });
        </script>';
?>
