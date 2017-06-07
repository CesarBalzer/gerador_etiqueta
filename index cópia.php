<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//pt-br" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Adicionando linhas dinamicamente</title>
        <style type="text/css" media="all">
            body{ font-family:Arial, Helvetica, sans-serif}
            #tudo{border:#CCCCCC 1px solid;width:680px;margin:0 auto}
            .bd_titulo{
                text-align:center;
                background-color:#CCCCCC;
                font-weight:bold
            }
        </style>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                function removeCampo() {
                    $(".removerCampo").unbind("click");
                    $(".removerCampo").bind("click", function () {
                        if($("tr.linhas").length > 1){
                            $(this).parent().parent().remove();
                        }
                    });
                }

                $(".adicionarCampo").click(function () {
                    novoCampo = $("tr.linhas:first").clone();
                    novoCampo.find("input").val("");
                    novoCampo.insertAfter("tr.linhas:last");
                    removeCampo();
                });
            });
        </script>
    </head>
    <body>
        <form method="post" name="frm_campo_dinamico" action="exemploPdf.php">
            <div id="tudo">
                <table border="0" cellpadding="2" cellspacing="4">
                    <tr><td colspan="4" class="bd_titulo">Adicionando Linhas Dinamicamente</td></tr>
                    <tr><td colspan="4" align="center"><a href="http://www.kdsistemasweb.com.br" target="_blank">www.kdsistemasweb.com.br</a></td></tr>

                    <tr><td class="bd_titulo" width="10">T�tulo</td><td class="bd_titulo">Descri��o 1</td><td class="bd_titulo">Descri��o 2</td><td class="bd_titulo">Descri��o 3</td></tr>
                    <tr class="linhas">
                        <td><input type="text" name="qtd[]" style="text-align:center" /></td>
                        <td><input type="text" name="descricao[]" /></td>
                        <td>
                            <select name="cor[]">
                                <option value="" selected="selected">Selecione uma cor...</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Branco">Branco</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Verde">Verde</option>
                            </select>
                        </td>
                        <td><input type="text" name="valor[]" style="text-align:center" /></td>
                        <td><a href="#" class="removerCampo" title="Remover linha">[ - ]</a></td>
                    </tr>
                    <tr><td colspan="4">
                            <a href="#" class="adicionarCampo" title="Adicionar item">[ + ]</a>
                        </td></tr>
                    <tr>
                        <td align="right" colspan="4"><input type="submit" id="btn-cadastrar" value="Cadastrar" /></td>
                    </tr>
                </table>
                        </form>
        </div>
    </body>
</html>