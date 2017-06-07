<?php

require_once(dirname(__FILE__) . '/html2pdf/html2pdf.class.php');
//$html = "<link rel='stylesheet' type='text/css' href='css/exemploPdf.css' />";

if (!empty($_POST)) {
//    foreach ($_POST as $v) {
//      print_r($_POST);
//    }
//    print_r($_POST['tam_tit']);
//    die();
    if (!empty($_POST['borda'])) {
        $borda = "border:#999;";
    }
    if (!empty($_POST['tit_neg'])) {
        $tit_neg = "font-weight: bold;";
    }
    if (!empty($_POST['desc_neg'])) {
        $desc_neg = "font-weight: bold;";
    }
    if (!empty($_POST['tam_tit'])) {
        $sizetit = "font-size:" . $_POST['tam_tit'] . "px";
    }
    if (!empty($_POST['sizedesc'])) {
        $sizedesc = "font-size:" . $_POST['sizedesc'] . "px";
    }
    if (!empty($_POST['tit_center'])) {
        $tit_center = "text-align: center;";
    }
    //die($_POST['tam_etiq']);
    if (!empty($_POST['tam_etiq'])) {
        $tam_etiq = "height:" . $_POST['tam_etiq'] . ";";
    }
    $cor_tit = "color:#" . $_POST['cor_tit'];
    $cor_desc = $_POST['cor_desc'];
    $fonte = "font-family:" . $_POST['fonte'];
//Arial Courier Helvetica Times
    $html = "
        <style>
        table{width:  100%;$borda;$fonte;}
        th{text-align: center;}
        td{text-align: left;$tam_etiq}
        tr{ }
        td.col1{text-align: left;}
        td.titulo{font-size: 24px;$tit_neg;$cor_tit;$sizetit;$tit_center;}
        td.desc{color:#$cor_desc;$desc_neg;$sizedesc}
        </style>
        ";
    $titulo = $_POST['titulo'];
    $descr1 = $_POST['descricao1'];
    $descr2 = $_POST['descricao2'];
    $descr3 = $_POST['descricao3'];
    $quant_linhas = count($titulo);

    //echo $quant_linhas;
    $html.= "<table>";
    $html.="<col style='width: 33%' class='col1'>";
    $html.="<col style='width: 33%'>";
    $html.="<col style='width: 33%'>";
    for ($i = 0; $i < $quant_linhas; $i++) {
        $j++;
        $k++;
        if ($j == 1) {
            $html.= "<tr>";
        }
        $html.="<td>";
        $html.="<table frame='box'>";
        $html.="<col style='width: 100%' class='col1'>";
        $html.="<col style='width: 100%'>";
        $html.="<col style='width: 100%'>";
        $html.="<col style='width: 100%'>";
        $html.="<tr>";
        $html.="<td class='titulo'>$titulo[$i]</td>";
        $html.="</tr>";
        $html.="<tr>";
        $html.="<td class='desc'>$descr1[$i]</td>";
        $html.="</tr>";
        $html.="<tr>";
        $html.="<td class='desc'>$descr2[$i]</td>";
        $html.="</tr>";
        $html.="<tr>";
        $html.="<td class='desc'>$descr3[$i]</td>";
        $html.="</tr>";
        $html.="</table>";
        $html.=" </td>";

        if ($j == 3) {
            $html.= "</tr>";
            $j = 0;
        } else if ($quant_linhas == $k) {
            $html.= "</tr>";
        }
    }
    $html.="</table>";

//echo $html;
    try {
        $html2pdf = new HTML2PDF('P', 'A4', 'pt');
        $html2pdf->pdf->SetAuthor('KDSistemas Web &copy; 2013');
        $html2pdf->pdf->SetTitle('Gerador de etiquetas KD');
        $html2pdf->pdf->SetSubject('Etiquetas geradas manualmente');
        $html2pdf->pdf->SetKeywords('gerador de etiquetas, etiquetas, php, label');
        //$html2pdf->pdf->AddPage();
        //$html2pdf->pdf->setFont("helvetica", '', 14);
        //$html2pdf->pdf->AddFont('Courier','','courier.php');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('etiquetas.pdf');
    } catch (HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
}