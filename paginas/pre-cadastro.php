<?php
/**
Template Name: Cadastro Professor
**/

get_header();
$td = get_template_directory_uri();
?>

 <div class="section p-2 py-5" id="bg-icon-professor">
    <div class="container">
      <div class="row box-white mx-box-shadow m-w-730 border-radius py-4" style="margin-top:-160px; background:#fff;position:relative;z-index:7;">
        <div class="col-md-12">
          <h1 class="text-center bold text-info">Pré-cadastro do Professor</h1>
          <p class="text-center py-2">Faça parte do nosso quadro de professores autorizados e<br>obtenha renda-extra rápida e segura. A HelpClass quer dar uma&nbsp;<br>mãozinha para seus sonhos.</p>
            <div class="form-cadastro">
                <?php if(!is_user_logged_in()) { ?>
                <form id="cadastro-professor" action="#" method="POST">
                    <div class="msgs"></div>
                    <div class="form-group row">
                         <?php wp_nonce_field( 'secret_action_noonce', 'security' ); ?>
                        <div class="col-md-6">
                        <input class="form-control" name="name" type="text" placeholder="NOME" maxlength="15" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="sobrenome" type="text" placeholder="SOBRENOME" maxlength="30" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="email" type="email" placeholder="E-MAIL" maxlength="50" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="phone" type="text" placeholder="TELEFONE (Apenas números)" pattern="\d+" maxlength="15" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="cidade" type="text" placeholder="CIDADE" maxlength="25" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="estado" type="text" placeholder="ESTADO" maxlength="20" required>
                        </div> <div class="col-md-12">
                        <textarea name="sobre" class="form-control" placeholder="FALE SOBRE VOCÊ E O QUE VOCÊ LECIONA" rows="7" maxlength="1500" required></textarea>
                        
                        </div>
                        <button class="btn btn-primary btn-padrao" style="margin:20px auto 0px;">CADASTRE-SE</button>
                    </div>
                </form>
                <?php }else{
                    echo '<p class="text-center">Você está logado e não pode acessar este formulário</p>';
                } ?>
            </div>
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