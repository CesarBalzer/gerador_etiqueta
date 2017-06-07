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
        text-align: right;
    }

    -->
</style>

<br>
<br>
<table>
    <col style="width: 33%" class="col1">
    <col style="width: 33%">
    <col style="width: 33%">


    <?php
    for ($k = 0; $k < 50; $k++) {
    ?>
        <tr>
            <td>
                <table>
                    <col style="width: 25%" class="col1">
                    <col style="width: 25%">
                    <col style="width: 25%">
                    <col style="width: 25%">

                <?php
                for ($k = 0; $k < 50; $k++) {
                ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </td>
        <td>
            <table>
                <col style="width: 25%" class="col1">
                <col style="width: 25%">
                <col style="width: 25%">
                <col style="width: 25%">

                <?php
                for ($k = 0; $k < 50; $k++) {
                ?>
                    <tr>        
                        <td><?php echo $k; ?></td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>        
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>        
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>        
                    </tr>        
                <?php
                }
                ?>

            </table>
        </td>
        <td><table>
                <col style="width: 25%" class="col1">
                <col style="width: 25%">
                <col style="width: 25%">
                <col style="width: 25%">

                <?php
                for ($k = 0; $k < 50; $k++) {
                ?>
                    <tr>
                        <td><?php echo $k; ?></td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                        <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                    </tr>
                <?php
                }
                ?>

            </table></td>

    </tr>
    <?php
            }
    ?>

        </table>
<!--        <table>
            <col style="width: 25%" class="col1">
            <col style="width: 25%">
            <col style="width: 25%">
            <col style="width: 25%">

    <?php
          //  for ($k = 0; $k < 50; $k++) {
    ?>
                <tr>
                    <td><?php// echo $k; ?></td>
                    <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                    <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                    <td>test de texte assez long pour engendrer des retours à la ligne automatique...</td>
                </tr>
    <?php
          //  }
    ?>

</table>-->
Cool non ?<br>