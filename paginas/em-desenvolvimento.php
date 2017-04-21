<?php
/**
Template Name: Em Desenvolvimento
**/

get_header();
$td = get_template_directory_uri();
?>

 <div class="section p-2 py-5" style="background:#F3F3F3;">
    <div class="container">
      <div class="row box-white mx-box-shadow m-w-730 border-radius py-4" style="margin-top:-160px; background:#fff;position:relative;z-index:7;">
        <div class="col-md-12">
          <h1 class="text-center bold text-info">Estamos quase chegando!</h1>
          <p class="text-center py-2 m-w-600">Os apps da HelpClass para Iphone e Android ainda estão em processo de desenvolvimento. Deixe seus dados abaixo que iremos avisar quando eles forem lançados.</p>
            <div class="form-cadastro">
                <?php if(!is_user_logged_in()) { ?>
                <form id="cadastro-professor" action="#" method="POST">
                    <div class="msgs"></div>
                    <div class="form-group row">
                        <?php wp_nonce_field( 'secret_action_noonce', 'security' ); ?>
                        <div class="col-md-6">
                        <input class="form-control" name="name" type="text" placeholder="NOME" maxlength="15" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="email" type="email" placeholder="E-MAIL" maxlength="50" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="phone" type="text" placeholder="TELEFONE (Apenas números)" pattern="\d+" maxlength="15" required>
                        </div> <div class="col-md-6">
                        <input class="form-control" name="cidade" type="text" placeholder="CIDADE" maxlength="25" required>
                        <input class="hidden" type="hidden" name="assinante" >
                        </div> 

                        <button class="btn btn-primary btn-padrao" style="margin:20px auto 0px;">QUERO SER AVISADO</button>
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
  

<?php


get_footer();