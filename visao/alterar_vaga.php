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

<?php
session_start();

if(!isset($_GET["idvaga"])){
  header("location:pg_inicial_ong.php?msg=Nenhuma vaga selecionada!");
}

require_once "../modelo/DAO/VagasDAO.php";
$vagaConn = new VagasDAO();
$vaga = $vagaConn->recuperarPorID($_GET["idvaga"]);
?>

<!-- Início Container -->
  <div class="container">
    <div class="form-group">
      <form action="../controle/alterarVaga.php" class="w-100" method="POST">
        <!--Início do Formulário-->
        <legend class="display-4">Alterar vaga</legend>
        <!--Título Principal -->
        <h3>Infomações da Vaga</h3> <!-- Título Descritivo  -->

        <fieldset>
          
          <input type="hidden"  class="form-control w-100" name="idvaga" value="<?=$vaga["id_vaga"]?>">
          <br>
          
          <label for="nome">Título:</label>

          <input type="text" placeholder="Insira o título da Vaga" class="form-control w-100" name="titulo" value="<?=$vaga["titulo"]?>"><br>
        
          <label for="endereco">Endereço da vaga:</label>
         
          <br><input type="address" id="endereco" name="endereco" placeholder="Insira o endereço da vaga" class="form-control" value="<?=$vaga["endereco"]?>"><br>

          <label for="telefone">Telefone:</label>

          <br><input type="tel" id="telefone" name="telefone"  placeholder="Insira o telefone da Instituição" class="form-control" value="<?=$vaga["telefone"]?>"><br>

         <label for="email"> E-mail:</label>
          <br><input type="email" id="email"  name="email" placeholder="Insira o email da Instituição" class="form-control" value="<?=$vaga["email"]?>"><br>

          <label for="estados">Estado:</label>

           <select name="uf" class="form-control" id="estados" style="text-align: center;">
            <option value="estado">Selecione seu Estado</option>
            <option value="ac">Acre</option>
            <option value="al">Alagoas</option>
            <option value="am">Amazonas</option>
            <option value="ap">Amapá</option>
            <option value="ba">Bahia</option>
            <option value="ce">Ceará</option>
            <option value="df" selected="selected">Distrito Federal </option>
            <option value="es">Espírito Santo</option>
            <option value="go">Goiás</option>
            <option value="ma">Maranhão</option>
            <option value="mt">Mato Grosso</option>
            <option value="ms">Mato Grosso do Sul</option>
            <option value="mg">Minas Gerais</option>
            <option value="pa">Pará</option>
            <option value="pb">Paraíba</option>
            <option value="pr">Paraná</option>
            <option value="pe">Pernambuco</option>
            <option value="pi">Piauí</option>
            <option value="rj">Rio de Janeiro</option>
            <option value="rn">Rio Grande do Norte</option>
            <option value="ro">Rondônia</option>
            <option value="rs">Rio Grande do Sul</option>
            <option value="rr">Roraima</option>
            <option value="sc">Santa Catarina</option>
            <option value="se">Sergipe</option>
            <option value="sp">São Paulo</option>
            <option value="to">Tocantins</option>
          </select>
        </fieldset><!-- Fim Estados Brasileiros-->
        <br>

        <label for="atuacao">Área de atuação:</label>
        
        <!--Começo atuação-->

        <select name="atuacao" id="atuacao" class="form-control" style="text-align: center;">

          <option value="atuacao" placeholder="Selecione a área em que a ONG atua" id="atuacao"></option>
          <option value="conservacao">Conservação de recursos naturais</option>
          <option value="controle">Controle da poluição</option>
          <option value="protecao">Proteção aos animais</option>
          <option value="alternativas">Tecnologias alternativas</option>
          <option value="ass_ser_soc">Assistência e serviços sociais</option>
          <option value="ass_adu">Assistência a adultos</option>
          <option value="ass_cri">Assistência a crianças</option>
          <option value="ass_pcd">Assistência a PCDs</option>
          <option value="ass_des_cat">Assistência a desastres e catástrofes</option>
          <option value="ass_ido">Assistência a idosos</option>
          <option value="ass_jov">Assistência jovens</option>
          <option value="ass-fam">Assistência familiar</option>
          <option value="ass_mat">Assistência material</option>
          <option value="cre">Creches</option>
          <option value="comb_vio">Combate a violência </option>
          <option value="Direitos da mulher">Direitos da mulher</option>
          <option value="pre_cri">Prevenção do crime</option>
          <option value="pro_cid">Promoção da cidadania</option>
          <option value="pro_con">Proteção ao consumidor</option>
          <option value="pro_dos_dir_civ">Proteção dos direitos civis</option>
          <option value="rea_de_inf_e_cri">Reabilitação de infratores e criminosos</option>
          <option value="ser_jur">Serviços Jurídicos</option>
          <option value="ass_cie">Associações científicas</option>
          <option value="cul">Cultura</option>
          <option value="edu">Educação</option>
          <option value="esp">Esportes</option>
          <option value="hos">Hospital</option>
          <option value="ser_med_de_rea">Serviços médicos de reabilitação</option>
          <option value="tra_e_rec_de_dep_qui">Tratamento e recuperação de dependentes químicos</option>
          <option value="out">Outros</option>
        </select>
        <!--Fim atuação-->
        </fieldset> <br>

        <h3>Descrição da vaga</h3> <!-- Título Descritivo  -->

        <fieldset>
          <!-- Caixa de Texto  -->

          <label for="descricao"></label>

          <textarea class="form-control"  name="descricao" id="descricao" cols="30" rows="5" placeholder="Conte mais sobre a Vaga" autocapitalize="sentences" maxlength="200" style="resize: none; color: gray;"><?=$vaga["descricao"]?></textarea>
            
        </fieldset><!-- Fim Caixa de Texto  -->

        <br>
        <br>

        <div>
          <!-- Finalizar Cadastro  -->

          <button class="btn btn-success" style="color: aliceblue;">Salvar
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js">
  </script>
</body>