<!-- **********************************************************************************
	Project: This is THE FINAL  ONE on Web Tecnologies subject.
	     In this project we build my a web sistem using bootstrap 4.0 and others tecnologies

	Tecnologies used: HTML5, CSS3, BOOTSTRAP 4.0, PHP 7,  JAVASCRIPT, jQUERY and MYSQL
	@uthors: IDELFRIDES JORGE | ÉRIC VINÍCIUS | GLHAZYANNO BRAGA | JOSÉ MARIA JAIRO
	Starded Date: 17th May, 2018.
	First parte Finished Date: 5th may, 2018.
	Bootstrap v4.0.0-beta.2 (https://getbootstrap.com)
*********************************************************************************** -->

    <!-- ***************************************************************
                    Form vacancies 
    **************************************************************** -->
    <br><br><br>
    <div class="title-content-page mt-5 pt-3" id="bg-card">
        <div class="container pb-5">
            <div class="row col-12">
                <h3 class="display-4 mx-auto">Cadastre uma vaga de emprego.</h3>
            </div><br><br><br>
            <div class="row col-10 mx-auto">
                <form class="col-12">
                    <div class="row">
                        <div class="form-group col-7">
                            <label for="InputTipVaga">*Tipo da vaga:</label>
                            <select name="InputTipVaga" class="form-control" id="InputTipVaga">
                                <option value="1">....</option>
                            </select>
                        </div>
                        <div class="form-group col-5">
                            <label for="InputCPF">*Cargo:</label>
                            <input type="text" class="form-control" name="InputCPF" id="InputCPF" placeholder="Digite seu CPF.">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            <label for="desc">*Descrição da Oportunidade</label>
                            <textarea name="desc" class="form-control" id="desc" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="InputAreAtuacao">*Área de Atuação:</label>
                            <select name="InputAreAtuacao" class="form-control" id="InputAreAtuacao">
                                <option value="1">....</option>
                            </select>
                        </div>

                        <div class="form-group col-3">
                            <label for="InputNumVagas">*Número de Vagas:</label>
                            <input type="text" name="InputNumVagas" class="form-control" id="InputNumVagas" placeholder="...">
                        </div>

                        <div class="form-group col-3">
                            <label for="InputCid">*Cidade:</label>
                            <select name="InputCid" class="form-control" id="InputCid">
                                <option value="1">Sobral</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row col-12 mx-auto  pt-5 pb-5">
                        <button type="submit" class="btn col-4 mx-auto mb-5">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url("estatico/js/jquery-3.3.1.min.js");?>"></script>
<script src="<?=base_url("estatico/js/popper.min.js");?>"></script>
<script src="<?=base_url("estatico/js/bootstrap.min.js");?>"></script>


    <!-- Optional JavaScript   -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script>
        $(document).ready(function () {
            // alert("Welcome to our time. This is War Machine!");

            $("#btn-envio").click(function () {
                $("form").submit(function () { return true });
                var aux = 0;

                // avalia todos os campus input
                $("input").each(function () {
                    if ($(this).val() === "") {
                        $(this).css({ "border": "1px solid #f00", "padding": "2px" });
                        aux = aux + 1;
                    }
                });

                // avalia o campo e-mail
                var d_email = $("#email-id").val();
                var emailFilter = /^.+@.+\..{2,}$/; // expressão regular  de caracteres aceites
                var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/; //  de caracteres não aceites
                if (!(emailFilter.test(d_email)) || d_email.match(illegalChars)) {
                    $("#email-id").css({ "border": "1px solid #f00", "padding": "2px" });
                    alert("E-mail inválido. Por favor, informe outro e-mail!");
                    aux++;
                }

                // validar o campo mensagem
                var data_message = $("textarea").val();

                if (data_message.trim().length === 0) {
                    $("textarea#message-id").css({ "border": "1px solid #f00", "padding": "2px" });
                    alert("Campo mensagem vazio. Por favor,  Preenche este campo!");
                    aux = aux + 1;
                }

                // teste a condição de envio
                if (aux === 0) {
                    $("#myform-id").submit(); // envia o formulário
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover();
        })
    </script>
