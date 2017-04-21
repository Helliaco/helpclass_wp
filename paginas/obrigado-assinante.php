<?php
/**
Template Name: Obrigado Assinante
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
          <p class="text-center py-2 m-w-730">Salvamos seu E-mail e enviaremos uma notificação assim que o aplicativo do HelpClass estiver disponível.</p>
            
        </div>
      </div>
    </div>
  </div>
  

<?php


get_footer();