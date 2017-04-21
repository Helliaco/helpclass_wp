<?php
global $post,$td;
$td = get_template_directory_uri();

$post_thumb = get_the_post_thumbnail_url( $post->ID, 'full' );
$bg_header = $post_thumb ? $post_thumb : $td . '/assets/images/bg1.jpg';

if(isset($post->post_type) && $post->post_type == 'page' ){
    $titulo = get_post_meta($post->ID, 'opes_de_pagina_ttulo_destaque', true);
    $sub_titulo = get_post_meta($post->ID, 'opes_de_pagina_sub_ttulo', true);
    $custom_html = get_post_meta( $post->ID, 'opes_de_pagina_custom_html', true );
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-toggleable-md py-4" id="header-menu">
        <div class="container">
            <a class="navbar-brand logo-hc" href="<?php echo home_url(); ?>"><img class="center-block img-fluid d-block mx-auto" src="<?php echo $td; ?>/assets/images/logo-footer.png">HelpClass</a> <button id="toggle-menu" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars" aria-hidden="true"></i>
               </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php
                $args_menu = array(
                    'theme_location' => 'menu_principal',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class' => 'navbar-nav ',
                    
                );
                wp_nav_menu( $args_menu);
                ?>
               
            </div>
        </div>
    </nav>
    <div class="text-center d-flex align-items-center h-100" style="background-image: url(<?php echo $bg_header; ?>);" id="mx-sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php if($titulo && $sub_titulo){ 
                    echo '<h1 class="display-1 text-white t-style2">' .  esc_attr($titulo) .'</h1>'; 
                    echo '<p class="lead text-white header-sub-titulo">' . esc_attr($sub_titulo) .'</p>'; 
                    
                    echo html_entity_decode($custom_html);
                } ?>
                </div>
            </div>
        </div>
    </div>