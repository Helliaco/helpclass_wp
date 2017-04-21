<?php
/**
Template Name: Obrigado Professor
**/

get_header();
$td = get_template_directory_uri();
?>

 <div class="section p-2 py-5" style="background:#F3F3F3;">
    <div class="container">
      <div class="row py-4">
        <div class="col-md-12">
        <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/17.png" style="margin-top:-25%;">
          <h1 class="text-center bold text-info">Obrigado pelo Cadastro!</h1>
          <p class="text-center py-2 m-w-730">As informações foram enviadas com sucesso para nossa equipe. Um representante da HelpClass irá entrar em contato para uma entrevista presencial ou por telefone.</p>
            
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center style1 py-3">Vantagens do Professor</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/praticidade.png">
          <h4 class="text-sm-center py-2">Praticidade</h4>
          <p class="my-1 text-center m-w-300">Você recebe os pedidos de aulas a qualquer hora em seu celular. Com um clique você decide se aceita ou recusa. </p>
        </div>
        <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/seguranca.png">
          <h4 class="text-sm-center py-2">Segurança</h4>
          <p class="my-1 text-center m-w-300">Levamos sua segurança a sério. Você somente irá dar a aula quando o pagamento do aluno for aprovado pelo HelpClass. </p>
        </div>
        <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/confiavel.png">
          <h4 class="text-sm-center py-2">Confiável</h4>
          <p class="my-1 text-center m-w-300">Recebimentos garantidos em contrato firmado entre você e o HelpClass. Comece agora mesmo a lucrar com suas aulas. </p>
        </div>
      </div>
    </div>
  </div>


<?php


get_footer('app');