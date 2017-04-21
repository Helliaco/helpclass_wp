   <?php global $td; ?>
 <footer class="text-center">
    <div class="section text-center bg-inverse py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="center-block img-fluid d-block mx-auto" src="<?php echo $td; ?>/assets/images/logo-footer.png"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-white text-center py-4">O compromisso da HelpClass é tornar ágil e dinâmica a conexão entre&nbsp;<br>professores e alunos. Venha com a gente!</p>
                </div>
            </div>

            <?php

                $menu_itens= wp_get_nav_menu_items(16);
               
                echo '<div class="row m-w-800 py-4 footer-menu "><div class="col-md-12"><ul class="text-white list-unstyled text-center ul-four-cols">';
                if($menu_itens){
                foreach($menu_itens as $item){
                    echo '<li><a href="'. $item->url .'">'. $item->title .'</a></li>';
                   
                }
                }
                echo '</ul></div></div>';
            ?>
            
               
            </div>
        </div>
    </div>
   
        <div class="bg-more-black" style="padding:20px 0px 0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-white" style="padding:30px 0px">HelpClass - Todos os direitos reservados</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row m-w-200">
                            <div class="col-4"><a href="#"><i class="d-block mx-auto fa fa-2x fa-twitter text-center py-4 text-primary"></i></a></div>
                            <div class="col-4"><a href="#"><i class="d-block mx-auto fa fa-2x fa-facebook-f text-center py-4 text-primary"></i></a></div>
                            <div class="col-4"><a href="#"><i class="d-block mx-auto fa fa-2x fa-instagram text-center text-primary py-4"></i></a></div>
                        </div>
                    </div>
                    <div class="col-md-4"><a href="http://artmx.com.br/"><img class="center-block img-fluid d-block float-right py-3 logo-artmx" src="<?php echo $td; ?>/assets/images/logo-rodape-artmx.png"></a></div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-97705715-1', 'auto');
    ga('send', 'pageview');

    </script>
</body>

</html>