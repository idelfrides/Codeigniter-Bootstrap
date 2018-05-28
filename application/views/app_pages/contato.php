<!-- **********************************************************************************
	Project: This is THE FINAL  ONE on Web Tecnologies subject.
	     In this project we build my a web system using bootstrap 4.0 and others tecnologies

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
                <h3 class="display-4 mx-auto">Cadastre-se antes de divulgar sua vaga!</h3>
            </div><br><br><br>
            <form class="row col-10 mx-auto form-control" action="<?=base_url("membro/contactMember");?>" method="post">
                <div class="col-12">
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputName">Nome*:</label>
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Digite seu nome." required>
                        </div>
                        <div class="form-group col-3">
                            <label for="InputCPF">CPF*:</label>
                            <input type="text" class="form-control" name="InputCPF" id="InputCPF" placeholder="Digite seu CPF." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputEmail">Email*:</label>
                            <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" placeholder="Digite seu E-mail." required>

                        </div>
                        <div class="form-group col-3">
                            <label for="InputSenha">Senha*:</label>
                            <input type="password" class="form-control" name="InputSenha" id="InputSenha" placeholder="*********" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputEnd">Endereço*:</label>
                            <input type="text" class="form-control" name="InputEnd" id="InputEnd" placeholder="Rua, Numero, Bairro" required>
                        </div>

                        <div class="form-group col-3">
                            <label for="InputCid">Cidade*:</label>
                            <select name="InputCid" class="form-control" id="InputCid" required>
                                <option value="1">Sobral</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-9">
                            <label for="InputSite">Seu Site:</label>
                            <input type="text" class="form-control" name="InputSite" id="InpuSiteId" placeholder="www.seusite.com">
                        </div>
                    
                        <div class="form-group col-3">
                            <label for="InputTel">Telefone*:</label>
                            <input type="text" class="form-control" name="InputTel" id="InputTel" placeholder="Digite seu Telefone." required>
                        </div>
                    </div>
                    <div class="row col-12 mx-auto  pt-5">
                        <button type="submit" class="btn col-4 mx-auto mb-5">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


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


<br><br><br>
<br><br><br>
<br><br><br>

