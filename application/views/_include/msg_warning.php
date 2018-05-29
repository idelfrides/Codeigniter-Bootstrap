
<br>
<div style="display: none;position: absolute; margin-left: 42%; width: 50%;" id="warningAlert" class="alert alert-warning alert-dismissible navbar-fixed-top alerta" role="alert">
    <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Warning</strong> <br><br>O servidor não responde! <br> Tente novamente dentro de alguns minutos.
</div>
<br><br>

<?php

echo'<script type="text/javascript">
        $(document).ready(function(){
            $("#warningAlert").fadeIn(1000);
            $("#warningAlert").fadeOut(8000);
        });
        </script>';
?>
