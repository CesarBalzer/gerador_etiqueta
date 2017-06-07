<?php

# Aqui incluímos a classe html2pdf.
include('html2pdf/html2pdf.class.php');

/* Guardamos na variável $html o html que queremos converter.
 * Linha 13 - Incluímos o nosso arquivo css (exemploPdf.css)
 * Linha 15 - Temos uma div de id = logo que formatamos a mesma
 *            com uma altura, largura, uma borda azul e uma imagem
 *            de background.
 * Linha 16 - Temos agora um span de id = texto que formatamos
 *            usando a fonte arial em negrito. */
//$html = '
//<link rel="stylesheet" type="text/css" href="css/exemploPdf.css" />
//
//        <div id="page">
//            <div class="frame">
//                <input type="text" name="titulo" class="titulo" size="" maxlength="13"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//            </div>
//            <div class="frame left">
//                <input type="text" name="titulo" class="titulo" size="" maxlength="13"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//            </div>
//            <div class="frame left">
//                <input type="text" name="titulo" class="titulo" size="" maxlength="13"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//                <input type="text" name="desc" class="desc" size="" maxlength="28"/><br/>
//            </div>
//        </div>
//
//';
# Converte o html para pdf.
//if (count($_POST) > 0) {
//    try {
//        /* Aqui estamos instanciando um novo objeto que irá criar o
//         * pdf. Então vamos aos parametros passados:
//         * 1º parâmetro: Utilize “P” para exibir o documento no
//         *               formato retrato e “L” para o formato
//         *               paisagem.
//         * 2º parâmetro: Formato da folha A4, A5.......
//         * 3º parâmetro: Caso ocorra alguma exceção durante a
//         *               conversão. Em qual idioma é para
//         *               exibir o erro. No caso o idioma escolhido
//         *               foi o português “pt”.
//         * 4º parâmetro: Informe TRUE caso o html de entrada esteja
//         *               no formato unicode e FALSE caso negativo.
//         * 5º parâmetro: Codificação a ser utilizada. ISO-8859-15, UTF-8 ......
//         * 6º parâmetro: Margem do documento. Você pode informa um
//         *               único valor como no exemplo acima.
//         *               Outra forma é informa um array setando as
//         *               margens separadamente.: Exemplo:
//         * $html2pdf = new HTML2PDF(
//         *   'P',
//         *   'A4',
//         *   'pt',
//         *   false,
//         *   'ISO-8859-15',
//         *   array(5,5,5,8));
//         * Sendo que a primeira posição do array representa a margem esquerda depois
//         * topo, direita e rodapé. */
//        $html2pdf = new HTML2PDF('P', 'A4', 'pt', true, 'UTF-8', 2);
//
//        # Passamos o html que queremos converte.
//        $html2pdf->writeHTML($html);
//
//        /* Exibe o pdf:
//         * 1º parãmetro: Nome do arquivo pdf. O nome que você quer dar ao pdf gerado.
//         * 2º parâmetro: Tipo de saída:
//          I: Abre o pdf gerado no navegador.
//          D: Abre a janela para você realizar o download do pdf.
//          F: Salva o pdf em alguma pasta do servidor. */
//        $html2pdf->Output('exemploPdf.pdf', 'I');
//    } catch (HTML2PDF_exception $e) {
//        echo $e;
//    }
//}
// exibindo os dados
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descr1 = $_POST['descricao1'];
    $descr2 = $_POST['descricao2'];
    $descr3 = $_POST['descricao3'];


    $quant_linhas = count($titulo);
    $atr.= "";
    $ftr.= "";
    $html = "<link rel='stylesheet' type='text/css' href='css/exemploPdf.css' />";
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
    // $html .= "</table>";
    //echo $html;
//    try {
    $html2pdf = new HTML2PDF('P', 'A4', 'pt', true, 'UTF-8', 2);
    $html2pdf->pdf->SetDisplayMode('fullpage','TwoColumnRight');
    $html2pdf->writeHTML($html);
    $html2pdf->Output('/Users/cebalzer/Desktop/exemploPdf.pdf', 'I');
//    } catch (HTML2PDF_exception $e) {
//        echo $e;
//    }
}

