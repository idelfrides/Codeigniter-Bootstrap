
<!-- Title page -->
<div class="container" id="lorem">
    <div class="row">
        <div class="col-8 mx-auto  col-sm-12 text-center my-5 col-sm-6 col-md-8 text-muted">
            <h1 class="display-3 text-uppercase"><?php echo $nome; ?></h1>
            <p class="text-muted">Saiba um pouco sobre mim.
                <br><strong>Follow-me</strong>
            </p>
        </div>
    </div>
</div>

<div class="myborder"></div>

<!-- ***************************************************************
                card section goes here
**************************************************************** -->

<div class="title-content-page mt-2 pt-3" id="bg-card">
    <div class="container pb-5">
        <div class="row">
            <div class="card col-3">
                <img class="card-img-top" src="http://panificadoramarcelo.cl/wp-content/uploads/2017/02/default-avatar-plaid-shirt-guy.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Éric Vinícius</h5>
                    <form  class="" action="<?=base_url("membro/showData");?>" method="post">
                        <input type="hidden" value="1" name="auxInput">
                        <input type="submit" class="btn btn-success" value="&nbsp;&nbsp;&nbsp;Conheça-me&nbsp;&nbsp;&nbsp;">
                    </form>
                </div>
            </div>
            <div class="card col-3">
                <img class="card-img-top" src="http://panificadoramarcelo.cl/wp-content/uploads/2017/02/default-avatar-plaid-shirt-guy.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Glhazyanno Linhares</h5>
                    <form  class="" action="<?=base_url("membro/showData");?>" method="post">
                        <input type="hidden" value="2" name="auxInput">
                        <input type="submit" class="btn btn-success" value="&nbsp;&nbsp;&nbsp;Conheça-me&nbsp;&nbsp;&nbsp;">
                    </form>
                </div>
            </div>
            <div class="card col-3">
                <img class="card-img-top" src="http://panificadoramarcelo.cl/wp-content/uploads/2017/02/default-avatar-plaid-shirt-guy.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Idelfrides Jorge</h5>
                    <form  class="" action="<?=base_url("membro/showData");?>" method="post">
                        <input type="hidden" value="3" name="auxInput">
                        <input type="submit" class="btn btn-success" value="&nbsp;&nbsp;&nbsp;Conheça-me&nbsp;&nbsp;&nbsp;">
                    </form>
                </div>
            </div>
            <div class="card col-3">
                <img class="card-img-top" src="http://panificadoramarcelo.cl/wp-content/uploads/2017/02/default-avatar-plaid-shirt-guy.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Jairo Chaves</h5>
                    <form  class="" action="<?=base_url("membro/showData");?>" method="post">
                        <input type="hidden" value="4" name="auxInput">
                        <input type="submit" class="btn btn-success" value="&nbsp;&nbsp;&nbsp;Conheça-me&nbsp;&nbsp;&nbsp;">
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <table class="table text-cente table-dark table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Vertente</th>
                    <th scope="col">Naturalidade</th>
                    <th scope="col">Hobbies</th>
                    <th scope="col">Objetivo de vida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $idade; ?></td>
                        <td><?php echo $curso; ?></td>
                        <td><?php echo $vertente; ?></td>
                        <td><?php echo $naturalidade; ?></td>
                        <td><?php echo $hobbies ;?></td>
                        <td><?php echo $objetivoVida ;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<br><br><br>



