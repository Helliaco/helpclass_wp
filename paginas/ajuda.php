<?php
/**
Template Name: Ajuda
**/

get_header();
$td = get_template_directory_uri();
?>

 <div class="py-5  section" id="duvidas-aluno" style="background: #F3F3F3;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center bold">Dúvidas do Aluno</h1>
                </div>
                <div class="col-md-12">
                    <div class="accordion m-w-800" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top:30px;margin-bottom:30px;">
                        <div class="card">
                            <div class="card-header actives" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                O que é a HelpClass? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                Helpclass é um aplicativo web e mobile que oferece um jeito simples e fácil de agendar sua aula com os melhores professores do Brasil, selecionados rigorosamente por nossa equipe.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo">
                                Como é feita a seleção dos professores? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-block">
                              Os Professores fazem o pré-cadastro pelo site. A equipe da HelpClass seleciona os melhores currículos faz um agendamento de entrevista presencial com os professores selecionados para garantir a alta qualidade dos profissionais que farão parte da HelpClass. 
							   
							   
							   
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                               Onde as aulas serão realizadas? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                               As aulas serão realizadas no domicílio do aluno ou em uma das salas HelpClass disponibilizadas para aulas particulares.

							   </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="false" aria-controls="collapseThree">
                              Para quais plataformas o o aplicativo está disponível? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapse45" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                              O aplicativo está disponível para Iphone e Android.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse55" aria-expanded="false" aria-controls="collapseThree">
                               Como e quando efetuo o pagamento pelas aulas? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapse55" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                               O pagamento deverá ser fetuado através do site ou aplicativo no ato do agendamento das aulas, via PayPal.          </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row"> </div>
                </div>
                <div class="col-md-6"> </div>
            </div>
        </div>
    </div>
    <div class="section imagem-e-texto">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-6"> <img src="<?php echo $td; ?>/assets/images/faq1.png" class="img-fluid"> </div>
                <div class="col-md-6 py-5">
                    <p class="py-4 px-5">Precisa de reforço para passar de ano?&nbsp;<br>Anda com aquele pânico do Enem?&nbsp;<br>Junte-se a milhares de alunos que alcançaram&nbsp;<br>seus objetivos com a ajuda da HelpClass. </p><a href="/estamos-quase-chegando/" class="btn btn-primary px-5 mx-5 btn-padrao text-uppercase bg-gray">Cadastre-se como Aluno</a>                    </div>
            </div>
        </div>
    </div>
    <div class="py-5 section"  style="background: #F3F3F3;" id="duvidas-professor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Dúvidas do Professor</h1>
                </div>

                <div class="col-md-12">
                    <div class="accordion m-w-800" id="accordion2" role="tablist" aria-multiselectable="true" style="margin-top:30px;margin-bottom:30px;">
                        <div class="card">
                            <div class="card-header actives" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">
                                O que é a HelpClass? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>

                            <div id="collapseOne5" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                Helpclass é um aplicativo web e mobile que oferece um jeito simples e fácil de localziar alunos e agendar aulas particulares.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo5a" aria-expanded="false" aria-controls="collapseTwo">
                                Todo Professor poderá fazer parte da Equipe HelpClass? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapseTwo5a" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-block">
                             Somente serão selecionados professores com graduação completa na área que pretende lecionar.	   
							   
							   
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree5a" aria-expanded="false" aria-controls="collapseThree">
                               Onde as aulas serão realizadas? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapseThree5a" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                               As aulas serão realizadas no domicílio do aluno ou em uma das salas HelpClass disponibilizadas para aulas particulares.

							   </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse45a" aria-expanded="false" aria-controls="collapseThree">
                              Como é feito o cadastro do Professor?  <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapse45a" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                             Primeiramente, através do site e app na aba (Torne-se um Professor) onde será preenchido um pré-cadastro e o profissional recebe em seu e-mail (Automaticamente) uma solicitação de envio de currículo e preenchimento de uma ficha cadastral.<br><br> O próximo passo é a seleção pela Equipe Help Class dos currículos e agendamento de uma entrevista presencial em que é apresentado a proposta.<br> <br> Tendo assim, a oportunidade de conhecer melhor o profissional que fará parte da Help Class.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse55a" aria-expanded="false" aria-controls="collapseThree">
                               Como o Professor recebe a solicitação de aula? <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapse55a" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                                Através de notificação no aplicativo e do e-mail cadastrado.       </div>
                            </div>
                        </div>
						
						 <div class="card">
                            <div class="card-header" role="tab" >
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse55b" aria-expanded="false" aria-controls="collapseThree">
                               Como o Professor fica sabendo de todas as informações referentes ao aplicativo e site?  <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>
                            </h5>
                            </div>
                            <div id="collapse55b" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                                Através da entrevista presencial, onde serão repassadas todas as informações pertinentes sobre a HelpClass.     </div>
                            </div>
                        </div>
						
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    <div class="section imagem-e-texto">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-6 py-5">
                    <p class="text-right py-4 px-5">Chegou a hora de você aproveitar seu<br>tempo livre para acumular renda-extra. Alcance mais<br>rápido seus objetivos&nbsp;com a ajuda da HelpClass. </p>
                    <p class="text-right px-5"> <a href="/pre-cadastro/" class="btn btn-primary text-center btn-padrao bg-gray text-uppercase">Cadastre-se como professor</a> </p>
                </div>
                <div class="col-md-6"> <img src="<?php echo $td; ?>/assets/images/faq2.png" class="img-fluid"> </div>
            </div>
        </div>
    </div>
    <div id="contato" class="py-5 section text-center"  style="background: #F3F3F3;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="">Ainda tem dúvidas? Fale conosco!</h1>
                    <p class="lead">Deixe abaixo suas dúvidas e contato. Teremos prazer em atende-lo e responde-lo de maneira personalizada.
                    </p>
                    <?php echo do_shortcode( '[contact-form-7 id="40" title="Contato"]' ); ?>

                    <div class="m-w-800 row">
                        <div class="col-sm-6">
                            <p><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 40px;float: left;"></i> Rua Desembargador Pedro Motta - 344 <br>Belo Horizonte - MG</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-phone" aria-hidden="true" style="font-size: 40px;float: left;"></i> (31) 3047-0000   |   (31) 98880-9999</p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
   
<?php


get_footer('app');