<br>
<div style="display: none;position: absolute; margin-left: 43%; width: 50%" id="dangerAlert" class="alert alert-danger alert-dismissible navbar-fixed-top alerta mt-3" role="alert">
    <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Danger</strong><br>Erro ao realizar consulta ao Banco de dados. <br> Tente Novamente mais tarde.
</div>
<br><br><br>

<?php

echo'<script type="text/javascript">
        $(document).ready(function(){
            $("#dangerAlert").fadeIn(1000);
            $("#dangerAlert").fadeOut(8000);
        });
        </script>';
?>