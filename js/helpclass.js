jQuery(document).ready(function() {

    $('form#cadastro-professor').submit(function(event) {
        event.preventDefault();
        $(".alert").alert('close')
        var inputs = $(this).serialize(), security = $('input[name="security"]').val(), esse = $(this);
        esse.prepend(ob_global_js.loading);
        esse.addClass('enviando');
        $.ajax({
            type: "post",
            dataType: "json",
            url: ob_global_js.url_home + '/wp-admin/admin-ajax.php',
            data: {
                'action': 'c_prof',
                'security': security,
                'inputs': inputs,
            },
            success: function(data) {
                console.log(data);
                esse.children('.cssload-jumping').replaceWith('');
                if(typeof data.error !== 'undefined'){
                    esse.removeClass('enviando');
                    esse.children('.msgs').html(alert_b('O e-mail inserido já está registrado.', 'warning'));
                }else{
                    esse.children('.msgs').html(alert_b(data.msg, 'success'));
                    window.location=data.redirect; 
                }
                
                //window.location = data;
            },
        });

       


    });
    $('body').on('click', '#toggle-menu', function () {
        if($('body').hasClass('menu_open')){
            $('body').removeClass('menu_open');
        }else{
           $('body').addClass('menu_open');
        }
    });

    $(document).on('click', '.animate_scroll', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});



});

function alert_b(text, tipo){
    return '<div class="alert alert-'+tipo+' alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+text+'</div>';
}

jQuery('.card-header a').click(function() {
   
    if($(this).parent().parent().hasClass('actives')){
        $(this).parent().parent().removeClass('actives');
    }else{
         $('.card-header').removeClass('actives');
         $(this).parents('.card-header').addClass('actives');
    }
});


