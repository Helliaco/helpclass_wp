<?php

get_header();
$td = get_template_directory_uri();
?>

 <div class="py-5  section"  style="background: #F3F3F3;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                   
                    the_content(); 
                   

                   endwhile;
                   endif;
                  
                   ?>
                </div>
                
            </div>
            
        </div>
    </div>
   
   
<?php


get_footer('app');