<!doctype html>
<html lang="pt-br">

<head>
    <!-- tags meta requeridas-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../css/cad_vaga.css">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="../WOH/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../WOH/assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../WOH/assets/logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title> World of Hope - Vaga</title>
</head>

<body>
    <!-- Início Container -->
    <div class="container">
        <div class="form-group">
            <form action="../controle/registrarVaga.php" class="w-100" method="post">
                <!--Início do Formulário-->
                <legend class="display-4">Cadastro de nova vaga</legend>
                <!--Título Principal -->
                <h3>Infomações da Vaga</h3> <!-- Título Descritivo  -->

                <fieldset>
                    <label for="nome">Título:</label>

                    <br><input type="text" placeholder="Insira o título da Vaga" class="form-control w-100"
                        name="titulo"><br>
                    <label for="endereco">Endereço da vaga:</label>

                    <br><input type="address" id="endereco" name="endereco" placeholder="Insira o endereço da vaga"
                        class="form-control"><br>

                    <label for="telefone">Telefone:</label>


                    <br><input type="tel" id="telefone" name="telefone" placeholder="Insira o telefone da Instituição"
                        class="form-control"><br>

                    <label for="email"> E-mail:</label>
                    <br><input type="email" id="email" name="email" placeholder="Insira o email da Instituição"
                        class="form-control"><br>

                    <label for="estados">Estado:</label>

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
                <br>

                <label for="atuacao">Área de atuação:</label>

                <!--Começo atuação-->

                <select name="atuacao" id="atuacao" class="form-control" style="text-align: center;">

                    <option value="atuacao" placeholder="Selecione a área em que a ONG atua" id="atuacao"></option>
                    <option value="Conservação de recursos naturais">Conservação de recursos naturais</option>
                    <option value="Controle da poluição">Controle da poluição</option>
                    <option value="Proteção aos animais">Proteção aos animais</option>
                    <option value="alternativas">Tecnologias alternativas</option>
                    <option value="Assistência e serviços sociais">Assistência e serviços sociais</option>
                    <option value="Assistência a adultos">Assistência a adultos</option>
                    <option value="Assistência a crianças">Assistência a crianças</option>
                    <option value="Assistência a PCDs">Assistência a PCDs</option>
                    <option value="Assistência a desastres e catástrofes">Assistência a desastres e catástrofes</option>
                    <option value="Assistência a idosos">Assistência a idosos</option>
                    <option value="Assistência jovens">Assistência jovens</option>
                    <option value="Assistência familiar">Assistência familiar</option>
                    <option value="Assistência material">Assistência material</option>
                    <option value="Creches">Creches</option>
                    <option value="Combate a violência">Combate a violência </option>
                    <option value="Direitos da mulher">Direitos da mulher</option>
                    <option value="Prevenção do crime">Prevenção do crime</option>
                    <option value="Promoção da cidadania">Promoção da cidadania</option>
                    <option value="Proteção ao consumidor">Proteção ao consumidor</option>
                    <option value="Proteção dos direitos civis">Proteção dos direitos civis</option>
                    <option value="Reabilitação de infratores e criminosos">Reabilitação de infratores e criminosos
                    </option>
                    <option value="Serviços Jurídicos">Serviços Jurídicos</option>
                    <option value="Associações científicas">Associações científicas</option>
                    <option value="Cultura">Cultura</option>
                    <option value="Educação">Educação</option>
                    <option value="Esportes">Esportes</option>
                    <option value="Hospital">Hospital</option>
                    <option value=">Serviços médicos de reabilitação">Serviços médicos de reabilitação</option>
                    <option value="Tratamento e recuperação de dependentes químicos">Tratamento e recuperação de
                        dependentes químicos</option>
                    <option value="Outros">Outros</option>
                </select>
                <!--Fim atuação-->
                </fieldset> <br>

                <h3>Descrição da vaga</h3> <!-- Título Descritivo  -->

                <fieldset>
                    <!-- Caixa de Texto  -->

                    <label for="descricao"></label>
                    <textarea class="form-control " name="descricao" id="descricao" cols="30" rows="5"
                        placeholder="Conte mais sobre a Vaga" autocapitalize="sentences" maxlength="200"
                        style="resize: none; color: gray;">
            </textarea>

                </fieldset><!-- Fim Caixa de Texto  -->

                <br>
                <br>

                <div>
                    <!-- Finalizar Cadastro  -->

                    <button class="btn btn-success" style="color: aliceblue;">Cadastrar
                        <a href="#" class="link-light"></a>
                    </button>


                    <button class="btn btn-danger" style="color: aliceblue;">
                        <a href="./pg_inicial_ong.php" class="link-light">Cancelar Cadastro</a>
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