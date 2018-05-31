
<br>
<div style="display: none;position: absolute; margin-left: 42%; width: 50%;" id="sucsessAlert" class="alert alert-success alert-dismissible navbar-fixed-top mt-3" role="alert">
    <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Success</strong> <br><br>Mensagem enviada com sucesso.
</div>
<br><br>

<?php

    echo'<script type="text/javascript">
        $(document).ready(function(){
            $("#sucsessAlert").fadeIn(1000);
            $("#sucsessAlert").fadeOut(8000);
        });
        </script>';
?>
