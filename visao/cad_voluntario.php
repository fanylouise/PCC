<!doctype html>
<html lang="pt-br">

<head>
    <!-- tags meta requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../css/style_cad_volun.css">

     <!--Favicon-->
     <link rel="apple-touch-icon" sizes="180x180" href="../WOH/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../WOH/assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../WOH/assets/logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <title> World of Hope - Cadastro</title>
</head>

<body>
    <!-- Início Container -->
    <div class="container">
        <div class="form-group">

            <form action="../controle/registrarUsuarioControler.php" class="w-100" method="post"
                enctype="multipart/form-data">
                <!--Início do Formulário-->
                <input type="hidden" name="perfil" value="vol">
                <legend class="display-4">Cadastro para voluntários</legend>
                <!--Título Principal -->

                <button class="btn btn-success">
                    <a href="../visao/form_cadastro_ong.php">ONG? CLIQUE AQUI</a>
                    <!--Alerta de campos -->
                </button>
                <br>
                <br>
                <div class="alert alert-success" role="alert" style="text-align: center;">
                    Todos os campos devem ser preenchidos!
                    <!--Alerta de campos -->
                </div>
                <h3>Infomações Pessoais</h3> <!-- Título Descritivo  -->

                <fieldset>
                    <!--Estados Brasileiros-->
                    <label for="name"> Nome Completo:</label>
                    <input type="text" name="nome" id="name" placeholder="Insira seu nome" class="form-control"><br>

                    <label for="cpfCnpj">CPF:</label>
                    <input type="text" name="cpfCnpj" title="Digite um CPF no formato: xxx.xxx.xxx-xx"
                        class="form-control" placeholder="Digite um CPF no formato: xxx.xxx.xxx-xx">
                    <br>
                    <label for="date">
                        Data de nascimento:
                    </label>
                    <input type="date" id="date" name="data_nasc" class="form-control"><br>

                    <label for="estados"> Estado:</label>

                    <select name="uf" class="form-control" id="estados" style="text-align: center;">
                        <option value="estado">Selecione seu Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AM">Amazonas</option>
                        <option value="AP">Amapá</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RO">Rondônia</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SE">Sergipe</option>
                        <option value="SP">São Paulo</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </fieldset><!-- Fim Estados Brasileiros-->
                <fieldset>
                    <br>
                    <!-- Informações Pessoais -->

                    <label for="CEP">CEP:
                        <input class="form-control" name="cep" id="CEP" required pattern="\d{5}-\d{3}" />
                    </label>
                    <br>

                    <label for="endereco">
                        Endereço:
                    </label>
                    <input type="text" name="endereco" class="form-control" id="endereco"
                        placeholder="Endereço, número, complemeto."><br>

                    <label for="email">
                        E-mail:
                    </label>
                    <input type="email" name="email" id="email" placeholder="Insira seu e-mail "
                        class="form-control"><br>

                    <label for="telefone">
                        Celular:
                    </label>
                    <input type="telefone" name="telefone" id="tel" class="form-control"
                        placeholder="&#40;xx&#41;xxxxx-xxxx"><br>

                    <label for="senha">
                        Senha:
                    </label>
                    <input type="password" name="senha" id="senha" placeholder="Insira uma senha forte"
                        class="form-control"><br>

                    <!-- Fim Informações Pessoais -->

                    <h3>Áreas de interesse</h3> <!-- Título Descritivo --><br>


                    <fieldset>
                        <!--Grupo de Opções de Interesse-->
                        <label for="Ambientalismo">Ambientalismo</label>
                        <input type="checkbox" id="Ambientalismo" name="interesses[]" value="Ambientalismo "><br>

                        <label for="Crianças">Crianças</label>
                        <input type="checkbox" id="Crianças" name="interesses[]" value="Crianças"><br>

                        <label for="Idosos">Idosos</label>
                        <input type="checkbox" id="Idosos" name="interesses[]" value="Idosos"><br>

                        <label for="PCDs">PCDs</label>
                        <input type="checkbox" id="PCDs" name="interesses[]" value="PCDs"><br>

                        <label for="Jovens">Jovens</label>
                        <input type="checkbox" id="Jovens" name="interesses[]" value="Jovens"><br>

                        <label for="Adultos">Adultos</label>
                        <input type="checkbox" id="Adultos" name="interesses[]" value="Adultos">
                    </fieldset><!-- Fim Grupo de Opções de Interesse-->

                    <br>

                    <h3>Bio</h3> <!-- Título Descritivo  -->

                    <fieldset>
                        <!-- Caixa de Texto  -->

                        <label for="bio"></label>
                        <textarea class="form-control " name="bio" id="bio" cols="30" rows="5"
                            placeholder="Conte mais sobre você" autocapitalize="sentences" maxlength="300 "
                            style="resize: none; color: gray;">
            </textarea>

                    </fieldset><!-- Fim Caixa de Texto  -->

                    <br>

                    <div>
                        <!-- Finalizar Cadastro  -->

                        <button class="btn btn-success" style="color: aliceblue;">Cadastrar
                            <a href="#" class="link-light"></a>
                        </button>

                    </div>
        </div>

        </form>
        <!--Fim do Formulário-->
    </div>
    <!-- Fim Container -->















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js">
    </script>
</body>