<?php

get_header();
$td = get_template_directory_uri();
?>

 <div class="py-5  section"  style="background: #F3F3F3;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <?php the_content(); 
                   
                   $term = get_term(18, 'wcpv_product_vendors');
                   var_dump($term);

                   $term_meta = get_term_meta( 18, 'vendor_data', true );
                   var_dump($term_meta);



                   $term = get_term(20, 'wcpv_product_vendors');
                   var_dump($term);

                   $term_meta = get_term_meta( 20, 'vendor_data', true );
                   var_dump($term_meta);

                   

                   ?>
                </div>
                
            </div>
            
        </div>
    </div>
   
   
<?php


get_footer('app');