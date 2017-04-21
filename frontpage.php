<?php
/**
Template Name: Home
**/

get_header();
$td = get_template_directory_uri();
?>


<div class="py-5  section" id="vantagens">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-center style1">Um mundo de vantagens</h1>
                <h5 class="text-center">Agende sua aula de qualquer dispositivo, de onde você estiver!</h5>
                <p class="lead text-center small p-2">De um jeito simples e fácil, agora você pode agendar sua aula com os melhores professores do Brasil, selecionados rigorosamente por nossa equipe. </p>
                <div class="row mx-w-80">
                    <div class="col-4"><img class="center-block img-fluid d-block mx-auto" src="<?php echo $td; ?>/assets/images/pratico.png">
                        <p class="text-center text-info" contenteditable="true">Prático</p>
                    </div>
                    <div class="col-4"><img class="center-block img-fluid d-block mx-auto" src="<?php echo $td; ?>/assets/images/rapido.png">
                        <p class="text-center text-info">Rápido</p>
                    </div>
                    <div class="col-4"><img class="center-block img-fluid d-block mx-auto" src="<?php echo $td; ?>/assets/images/confiavel-2.png">
                        <p class="text-center text-info">Confiável</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5"> <img class="center-block img-fluid d-block" src="<?php echo $td; ?>/assets/images/devices.png"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row"> </div>
            </div>
            <div class="col-md-6"> </div>
        </div>
    </div>
</div>
<div class="section p-0" id="alunos-professores">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-a-p col-a-p-a">
                <div class="top" style="background:#FFCC00"> </div>
                <div class="bot">
                    <div class="box-content">
                        <p class="text-uppercase text-right py-2">Para<br>O Aluno</p>
                        <p class="text-right"> <a href="estamos-quase-chegando/" class="btn btn-primary btn-blue text-uppercase btn-azul">Agende sua Aula</a></p>
                    </div> <img src="<?php echo $td; ?>/assets/images/aluno.png" class="center-block d-block img-fluid mx-auto"> </div>
            </div>
            <div class="col-md-6 col-a-p col-a-p-p">
                <div class="top">
                    <div class="box-content">
                        <p class="text-uppercase py-2">Para<br>O Professor</p><a href="pre-cadastro/" class="btn btn-primary text-uppercase btn-azul">Consiga alunos</a> </div>
                </div>
                <div class="bot" style="background:#E4F232"> <img src="<?php echo $td; ?>/assets/images/PROFESSOR.png" class="center-block d-block img-fluid mx-auto"> </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center style1 py-3">Você aprende em 3 simples passos!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/Group%20255.png">
                <h4 class="text-center py-2">Agende</h4>
                <p class="my-1 text-center m-w-300">Através do site ou APP, o aluno escolhe a disciplina e localiza os professores mais próximos de sua casa. </p>
            </div>
            <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/Group%20256.png" style="margin-top:-5.5%">
                <h4 class="text-center py-2">Efetue o pagamento</h4>
                <p class="my-1 text-center m-w-300">Você seleciona a quantidade de horas desejadas e faz o pagamento online. O valor é único para qualquer professor. </p>
            </div>
            <div class="col-md-4 py-5"> <img class="center-block d-block img-fluid mx-auto" src="<?php echo $td; ?>/assets/images/Group%20257.png">
                <h4 class="text-center py-2">Faça Sua Aula</h4>
                <p class="my-1 text-center m-w-300">No dia e horário agendado, o professor vai até você e realiza a aula no conforto de sua casa, ou em uma das unidades HelpClass. </p>
            </div>
        </div>
    </div>
</div>
<div class="text-center d-flex align-items-center" style="background-image: url(<?php echo $td; ?>/assets/images/bg4.png);padding:100px 0px 120px!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white style1 py-4">Sua aula em um clique. de verdade!</h1>
                <p class="text-white h4 no-bold py-4">Diferente de nossos concorrentes, não somos uma plataforma de classificados no qual qualquer professor pode disponibilizar suas aulas sem qualquer critério de avaliação.&nbsp;<br>Nossos professores são rigorosamente selecionados e de altíssimo
                    nível de conhecimento. </p>
                <div class="row">
                    <div class="col-md-4"><img class="center-block img-fluid d-block mx-auto m-w-100 py-2" src="<?php echo $td; ?>/assets/images/porco.png">
                        <h4 class="text-white bold">Preços Fixos</h4>
                        <p class="text-white m-w-300 py-1">Chega de ficar negociando preços. É hora de focar na qualidade se seu aprendizado. Nossos preços são fixos e competitivos.</p>
                    </div>
                    <div class="col-md-4"><img class="center-block img-fluid d-block mx-auto m-w-100 py-2" src="<?php echo $td; ?>/assets/images/relogio.png">
                        <h4 class="text-white bold">Sem bla bla bla</h4>
                        <p class="text-white m-w-300 py-1">Você agenda sua aula e escolhe o professor com apenas um clique. Sem conversa por chat, sem perda de tempo e sem bla bla bla. Simples como deve ser.</p>
                    </div>
                    <div class="col-md-4"><img class="center-block img-fluid d-block mx-auto m-w-100 py-2" src="<?php echo $td; ?>/assets/images/check.png">
                        <h4 class="text-white bold">Garantia Total</h4>
                        <p class="text-white m-w-300 py-1">Nós confiamos em nossos professores. Se você não receber sua aula com o máximo de qualidade, devolvemos cada centavo do que você pagou. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php


get_footer('app');