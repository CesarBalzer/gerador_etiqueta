$(document).ready(function() {
    $(".adicionarCampo").click(function () {
        novoCampo = $("tr.linhas:first").clone();
        novoCampo.find("input").val("");
        novoCampo.insertAfter("tr.linhas:last");
        removeCampo();
    });

    $(".hide").show();

//    $("#gerarpdf").click(function(){
//        if(this.submit()){
//            $(".hide").fadeOut('slow');
//            $("#config").fadeIn('slow');
//            $(".hi").fadeIn('slow');
//            this.reset();
//            setTimeout('reload()', 800);
//        }
//    });
//    $("#config").click(function(){
//        $(".hide").fadeIn('slow');
//        $("#config").fadeOut('slow');
//        $(".hi").fadeOut('slow');
//    });
    
    //    $('#modelo_fonte').val('');
  
    $("#fonte").change(function(){
        $('#modelo_fonte').css('font-family',$("#fonte").val());
    });
    $("#tam_tit").change(function(){
        $('.titulo').css('font-size',$("#tam_tit").val()+"px");
        var tam = parseInt($("#tam_tit").val());
        var heig = tam+5;
        $('.titulo').css('height',heig);
        $("#sizetit").val($("#tam_tit").val());

        //alert(max);
        if(tam > 24){
            $("input[class=titulo]").attr('maxlength',13);
        }
    });
    $("#tit_center").click(function(){
        var tam = parseInt($("#tam_tit").val());
        if(tam > 24){
            if($("#tit_center").is(':checked')){
                $("input[class=titulo]").attr('maxlength',11);
            }else{
                $("input[class=titulo]").attr('maxlength',13);
            }
        }else{
          $("input[class=titulo]").attr('maxlength',13);
        }
    });
    $("#tam_desc").change(function(){
        $('.descricao').css('font-size',$("#tam_desc").val()+"px");
        var tam = parseInt($("#tam_desc").val());
        var heig = tam+5;
        $('.descricao').css('height',heig);
        $("#sizedesc").val($("#tam_desc").val());

        //alert(max);
        if(tam > 24){



            $("input[class=descricao]").attr('maxlength',26);
        }
    });
    $("#tamanho").change(function(){
        //alert($('#tamanho').val());
        $('#modelo_fonte').css('font-size',$("#tamanho").val()+"px");
    });

    $("#tit_neg").click(function(){
        $(this).is(':checked') ? $(".titulo").css('font-weight','bold') : $("#titulo").css('font-weight','normal');
    });
    $("#desc_neg").click(function(){
        $(this).is(':checked') ? $(".descricao").css('font-weight','bold') : $(".descricao").css('font-weight','normal');
    });
    $("#atualizar").click(function(){
        location.reload(true);
    });

    $('#colorSelector').ColorPicker({
        color: '#000',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('#colorSelector div').css('backgroundColor', '#' + hex);
            $('#res').val("#"+hex);
            $('#titulo').css("color","#"+hex);
            $('#cor_tit').val(hex);
        }
    });

    $('#colorSelector2').ColorPicker({
        color: '#000',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            $('#colorSelector2 div').css('backgroundColor', '#' + hex);
            $('.descricao').css("color","#"+hex);
            $('#cor_desc').val(hex);
        }
    });
});


function removeCampo() {
    $(".removerCampo").unbind("click");
    $(".removerCampo").bind("click", function () {
        if($("tr.linhas").length > 1){
            $(this).parent().parent().remove();
        }
    });
}
