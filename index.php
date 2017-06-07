<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//pt-br" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"/>
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"/>
        <meta http-equiv="Expires" content="-1"/>
        
        <meta name="keywords" content="criar etiqueta,gerar etiqueta php,etiqueta, etiqetas 3 colunas, etiquetas php, gerador etiquetas, gerar etiquetas, label generator"/>
        <title>Gerador de etiquetas KD Sistemas Web</title>
        <style type="text/css" media="all">

        </style>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        
<!--        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>-->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/ui/jquery-ui-1.10.2.custom.css" rel="stylesheet">
        


        <link href='vendor/bootstrap/css/chosen.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/uniform.default.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/colorbox.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/jquery.cleditor.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/jquery.noty.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/noty_theme_default.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/elfinder.min.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/elfinder.theme.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/jquery.iphone.toggle.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/opa-icons.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/uploadify.css' rel='stylesheet'/>
        <link href='vendor/bootstrap/css/dropbox.css' rel='stylesheet'/>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-validate.js"></script>
        <script src="js/validacoes.js"></script>
        <script src="js/jquery-ui-1.10.2.custom.js"></script>
        <script src="vendor/jquery-1.9.0.min.js"></script>
        <script src="vendor/bootstrap/js/jquery.iphone.toggle.js"></script>
        <link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
        <!--    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />-->

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/colorpicker.js"></script>
        
<!--    <script type="text/javascript" src="js/eye.js"></script>-->
<!--    <script type="text/javascript" src="js/utils.js"></script>-->
<!--    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>-->

        <script src="js/script.js"></script>
    </head>
    <body>
        <div id="tudo">
            <form method="post" name="frm_etiqueta" id="frm_etiqueta" action="parsePdf.php">

                <table  class="table table-striped table-bordered">
                    <tr class="alert alert-info"><td colspan="5" style="text-align: center;font-size: 30px; font-weight: bolder" >Gerador de etiquetas manual</td></tr>
                    <tr class="">
                        <td colspan="3" style="font-size: 11px;" >Opções: 3 colunas em fontes e cores diversas.</td>
                        <td colspan="1" style="font-size: 11px;" >Seu IP: <?= $_SERVER["REMOTE_ADDR"] ?></td>
                        <td colspan="1" style="font-size: 14px;" >
<!--                            <a href="http://localhost/gerador"><i class="icon-refresh"></i> Atualizar</a>-->
                            <button type="button" class="atualizar btn" id="atualizar"><i class="icon-refresh"></i> Atualizar</button>
                        </td>
<!--                        <td colspan="1" style="font-size: 11px;" ><a href="http://kdsistemasweb.com.br/gerador"><i class="icon-home"></i> Atualizar.</a></td>-->
                    </tr>
                    <tr><td colspan="5"></td></tr>
                    <tr class="alert alert-info hi">
                        <td colspan="1" align="center" >Selecione uma cor para o título.<br/><br/>
                            <div id="colorSelector"><div style="background-color: #333;"></div></div>
                            Tamanho da fonte: <select name="tam_tit" id="tam_tit">
                                <option value="18" class="tamtit">18</option>
                                <option value="19" class="tamtit">19</option>
                                <option value="20" class="tamtit">20</option>
                                <option value="21" class="tamtit">21</option>
                                <option value="22" class="tamtit">22</option>
                                <option value="23" class="tamtit">23</option>
                                <option value="24" class="tamtit" selected="selected">24</option>
                                <option value="28" class="tamtit">28</option>
                                <option value="32" class="tamtit">32</option>
                            </select>
                        </td>
                        <td colspan="1" align="center" >Selecione uma cor para a descrição.<br/><br/>
                            <div id="colorSelector2"><div style="background-color: #333"></div></div>
                            Tamanho da fonte: <select name="tam_desc" id="tam_desc">
                                <option value="9" class="tamdesc">9</option>
                                <option value="10" class="tamdesc">10</option>
                                <option value="11" class="tamdesc">11</option>
                                <option value="12" class="tamdesc" selected="selected">12</option>
                                <option value="14" class="tamdesc">14</option>
                                <option value="16" class="tamdesc">16</option>
                            </select><input type="hidden" name="sizedesc" id="sizedesc" class="sizdesc" value=""/>
                        </td>
                        <td colspan="1" align="center" >
                            <input type="checkbox" name="borda" id="borda"/> <label style="margin-left: 20px; margin-top: -16px;">Borda na etiqueta.</label>
                            <input type="checkbox" name="tit_neg" id="tit_neg"/> <label style="margin-left: 20px; margin-top: -16px;">Título em negrito.</label>
                            <input type="checkbox" name="desc_neg" id="desc_neg"/> <label style="margin-left: 20px; margin-top: -16px;">Descrição em negrito.</label>
                            <input type="checkbox" name="tit_center" id="tit_center"/> <label style="margin-left: 20px; margin-top: -16px;">Título centralizado.</label>
                            
                        </td>
                        <td colspan="2" align="center" >
                            Altura da etiqueta: <select name="tam_etiq" id="tam_etiq" style="width: 100px;">
                                <option value="0" class="tamdetiq">Normal</option>
                                <option value="20" class="tamdetiq">3 cm</option>
                                <option value="25" class="tamdetiq">4 cm</option>
                            </select><input type="hidden" name="sizedesc" id="sizedesc" class="sizdesc" value=""/>
                        </td>
                    </tr>
                    <tr class="hi">
                        <td colspan="3" style="text-align: left;">Fontes para as etiquetas:
                            <select name="fonte" id="fonte">
                                <option value="Arial" id="arial" selected="selected">Arial</option>
                                <option value="Courier" id="courier">Courier</option>
                                <option value="Helvetica" id="helvetica">Helvetica</option>
                                <option value="Times" id="times">Times</option>
                            </select><input id="modelo_fonte" class="" value="Exemplo de Fonte"/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align: center;font-size: 26px;">
<!--                               <button type="button" class="btn btn-warning" id="config"><i class="icon-wrench"></i> Concluir configuração</button>-->
                        </td>
                    </tr>
                    <tr class="hide">
                        <td class="bd_titulo" width="10">T&iacute;tulo</td>
                        <td class="bd_titulo">Descri&ccedil;&atilde;o 1</td>
                        <td class="bd_titulo">Descri&ccedil;&atilde;o 2</td>
                        <td class="bd_titulo">Descri&ccedil;&atilde;o 3</td>
                        <td class="bd_titulo">Remove linha</td>
                    </tr>
                    <tr>
                    <tr class="linhas hide">
                        <td class="hid">
                            <input type="text" name="titulo[]" id="titulo" class="titulo" maxlength="17" style="" data-required="true" />

                            <input type="hidden" name="cor_tit" id="cor_tit" value=""/>

                        </td>
                        <td class="hid">
                            <input type="text" class="descricao" name="descricao1[]" id="descricao1" maxlength="30" data-required="true" />

                            <input type="hidden" name="cor_desc" id="cor_desc" value=""/>
                        </td>
                        <td class="hid">
                            <input type="text" class="descricao" name="descricao2[]" id="descricao2" maxlength="30" />
                        </td>
                        <td class="hid">
                            <input type="text" class="descricao" name="descricao3[]" id="descricao3" maxlength="30" />
                        </td>
                        <td class="hid">
                            <button type="button" class="removerCampo btn btn-danger" id="limpa"><i class="icon icon-trash icon-white"></i> Remover</button>
                            <a href="#" class="">

                                <span class=""></span> </a>
                        </td>
                    </tr>
                    <tr class="hide">
                        <td colspan="5" class="hid">
                            <button type="button" class="adicionarCampo btn btn-success" id="limpa"><i class="icon-ok icon-white"></i> Adicionar linha</button>

                        </td>
                    </tr>
                    <tr class="hide">
                        <td style="text-align: center;" colspan="5" class="hid">
                            <button type="reset" class="btn" id="limpa"><i class="icon-repeat"></i> Limpar tudo</button>
                            <button type="submit" class="btn btn-primary" id="gerarpdf"><i class="icon-file icon-white"></i> Gerar PDF</button>

                        </td>
                    </tr>
                    </tr>
                    <tfoot>
                        <tr>
                            <td style="text-align: center;font-size: 9px;" colspan="5">
                                &copy; By
                                <a href="http://www.kdsistemasweb.com.br" target="_blank">
                                    KDSistemas Web <?= date('Y'); ?>
                                </a>

                            </td>
                        </tr>
                    </tfoot>
                </table>

            </form>
        </div>
    </body>
</html>