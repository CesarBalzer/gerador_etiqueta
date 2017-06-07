<style type="text/css">
    <!--
    table
    {
        width:  100%;
        border: solid 1px #5544DD;
    }

    th
    {
        text-align: center;
        border: solid 1px #113300;
        background: #EEFFEE;
    }

    td
    {
        text-align: left;
        border: solid 1px #55DD44;
    }

    td.col1
    {
        border: solid 1px red;
        text-align: left;
    }
    td.titulo
    {
        font-size: 24px;
    }

    -->
</style>

<br>
<br>

<?php
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descr1 = $_POST['descricao1'];
    $descr2 = $_POST['descricao2'];
    $descr3 = $_POST['descricao3'];
    $quant_linhas = count($titulo);
    $atr.= "";
    $ftr.= "";
    //$html = "<link rel='stylesheet' type='text/css' href='css/exemploPdf.css' />";
    $html .= "<table class='' border='0' cellpadding='2' cellspacing='4'>";
    for ($i = 0; $i < $quant_linhas; $i++) {
        $j = 0;
//          if($i < 3){
//            $html.= "<td><tr><td class='titulo'>$titulo[$i]</td></tr>";
//            $html.="<tr><td>$descr1[$i]</td></tr>";
//            $html.="<tr><td>$descr2[$i]</td></tr>";
//            $html.="<tr><td>$descr3[$i]</td></tr>";
//            $html.="</td>";
//          }else{
        $html .= "<tr><td class='titulo'>$titulo[$i]</td></tr>
                <tr><td>$descr1[$i]</td></tr>
                <tr><td>$descr2[$i]</td></tr>
                <tr><td>$descr3[$i]</td></tr>";
        //}
    }$html.= "</table>";
}
?>
    <table>
        <col style="width: 33%" class="col1">
        <col style="width: 33%">
        <col style="width: 33%">


<?php
    for ($k = 0; $k < 10; $k++) {
?>
            <tr>
                <td>
                    <table>
                        <col style="width: 100%" class="col1">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <tr>
                            <td class="titulo">Titulo</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <col style="width: 100%" class="col1">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <tr>
                            <td class="titulo">Titulo</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <col style="width: 100%" class="col1">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <col style="width: 100%">
                        <tr>
                            <td class="titulo">Titulo</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                        <tr>
                            <td>1234567890123456789012345678901</td>
                        </tr>
                    </table>
                </td>

            </tr>
<?php
    }
?>

</table>



