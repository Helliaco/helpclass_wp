jQuery(document).ready(function($) {
    $('body').on('click', '.ativar_professor', function () {
        var id_user = $(this).data('id');
     $.ajax({
            type: "post",
            dataType: "json",
            url: ajaxurl,
            data: {
                'action': 'approve_vendor',
                'security': ob_global_js.security,
                'id': id_user,
            },
            success: function(data) {
                console.log(data);
                 window.location= ob_global_js.url_home+'/wp-admin/user-edit.php?user_id=' + id_user + '&ficha=1'; 
            },
        });


    })

});