<!--INICIO DO PHP-->
<?php

//IMPLEMENTA-SE VARIAVEIS COM O SIMBOLO DE $ (CIFRAO)
$qtd_caixas = 12;
$und_caixas = 12;

$qtd_total = $qtd_caixas * $und_caixas;

?>
<!--FIM DO PHP-->

<!--IMPORTANDO ARQUIVO CSS-->
<link rel="stylesheet" href="style.css">

<div id="div_principal">

    ESTOQUE

    <table>
        <tr>
            <th>
                QUANTIDADE DE CAIXAS
            </th>
            <th>
                UNIDADES POR CAIXAS
            </th>
            <th>
                QUANTIDADE TOTAL
            </th>        
        </tr>
        <tr>
            <th>
                <!--IMPORTA-SE VARIAVEIS DO PHP ABRINDO NORMALMENTE O PHP-->
                <?php echo $qtd_caixas . ' caixas'; ?>
            </th>
            <th>
                <?php echo $und_caixas . ' unidades'; ?>
            </th>
            <th>
                <?php echo $qtd_total . ' unidades'; ?>
            </th>        
        </tr>
    </table>
</div>