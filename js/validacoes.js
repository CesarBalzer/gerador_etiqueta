jQuery(document).ready(function($) {
    $("#frm_etiqueta").validate({

        rules: {
            'titulo[]': {
                required: true,
                minlength: 2,
                maxlength: 17
            },
            errorPlacement: function(error, element) {
                error.appendTo( element.parent("td").next("td") );
            }
        }
    });


});



