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

<a href="<?= dirname('view.php').'/controller.php'?>">Gerar PDF</a>
<br/>
<br/>
<?php
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descr1 = $_POST['descricao1'];
    $descr2 = $_POST['descricao2'];
    $descr3 = $_POST['descricao3'];
    $quant_linhas = count($titulo);
}
?>
<table>
    <col style="width: 33%" class="col1">
    <col style="width: 33%">
    <col style="width: 33%">


    <?php
    for ($i = 0; $i < $quant_linhas; $i++) {
        $j++;
        if ($j == 1) {
            echo "<tr>";
        }
    ?>
        <td>
            <table>
                <col style="width: 100%" class="col1">
                <col style="width: 100%">
                <col style="width: 100%">
                <col style="width: 100%">
                <tr>
                    <td class="titulo"><?= $titulo[$i]?></td>
                </tr>
                <tr>
                    <td><?= $descr1[$i]?></td>
                </tr>
                <tr>
                    <td><?= $descr2[$i]?></td>
                </tr>
                <tr>
                    <td><?= $descr3[$i]?></td>
                </tr>
            </table>
        </td>
<?php
        if ($j == 3) {
            echo "</tr>";
            $j = 0;
        }
    }
?>
</table>



