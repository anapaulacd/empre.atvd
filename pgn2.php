<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV2</title>
    <link rel='stylesheet' type='text/css' media='screen' href='a.css'>
</head>

<body>
    <div class="Pagina">
        <h2>Vendedor:</h2>
        <form method="post" action="">
            <input required type="text" name="vendedor">

            <p>semana 1:</p>
            <form action="" method="post">
                <input required type="number" name="semana1" >

                <p>semana 2:</p>
                <form action="" method="post">
                    <input required type="number" name="semana2" >

                    <p>semana 3:</p>
                    <form action="" method="post">
                        <input required type="number" name="semana3" >

                        <p>semana 4:</p>
                        <form action="" method="post">
                            <input required type="number" name="semana4" >

                            <p>mês:</p>
                            <form action="" method="post">
                                <input required type="number" name="mes" >

                                <br><br>
                                <button class="custom-btn btn-2">Verificar</button>

                                <?php
                                //Variáveia
                                $mes = filter_input(INPUT_POST, "mes");
                                $semana1 = filter_input(INPUT_POST, "semana1");
                                $semana2 = filter_input(INPUT_POST, "semana2");
                                $semana3 = filter_input(INPUT_POST, "semana3");
                                $semana4 = filter_input(INPUT_POST, "semana4");
                                $vendedor = filter_input(INPUT_POST, "vendedor");
                                $SalarioMinimo = 1927.02;
                                $MetaSemanal = 20000;
                                $MetaMensal = 80000;
                                $ValorCertoMes = $semana1 + $semana2 + $semana3 + $semana4;

                                if ($mes != $ValorCertoMes) {
                                    echo "<script>alert('Valores semanais não batem com o mês');</script>";
                                }
                                //Calcula se o valor ganho é maior que a meta assim ganha 5%

                                if ($semana1 > 20000) {
                                    $BonusSemana1 = ($semana1 - 20000) * 0.05;
                                } else {
                                    $BonusSemana1 = 00;
                                }
                                if ($semana2 > 20000) {
                                    $BonusSemana2 = ($semana2 - 20000) * 0.05;
                                } else {
                                    $BonusSemana2 = 00;
                                }
                                if ($semana3 > 20000) {
                                    $BonusSemana3 = ($semana3 - 20000) * 0.05;
                                } else {
                                    $BonusSemana3 = 00;
                                }
                                if ($semana4 > 20000) {
                                    $BonusSemana4 = ($semana4 - 20000) * 0.05;
                                } else {
                                    $BonusSemana4 = 00;
                                }

                                //Calcula se o valor semanal se for igual ganha 1%
                                if ($semana1 >= 20000) {
                                    $bonusMetaSemanal1 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal1 = 00;
                                }

                                if ($semana2 >= 20000) {
                                    $bonusMetaSemanal2 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal2 = 00;
                                }

                                if ($semana3 >= 20000) {
                                    $bonusMetaSemanal3 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal3 = 00;
                                }

                                if ($semana4 >= 20000) {
                                    $bonusMetaSemanal4 = 20000 * 0.01;
                                } else {
                                    $bonusMetaSemanal4 = 00;
                                }





                                //Calcula se o valor ganho mensalmente é maior que meta ganha 10%
                                if ($mes > 80000) {
                                    $BonusMensal = ($mes - 80000) * 0.1;
                                } else {
                                    $BonusMensal = 00;
                                }




                                $TotalBonusSemanal = $bonusMetaSemanal1 +  $bonusMetaSemanal2 +  $bonusMetaSemanal3 +  $bonusMetaSemanal4;
                                $TotalExcedenteSemanal =  $BonusSemana1 + $BonusSemana2 + $BonusSemana3 + $BonusSemana4;
                                $SomaTotal = $TotalBonusSemanal + $TotalExcedenteSemanal + $BonusMensal + $SalarioMinimo;

                                echo "<h6>Ganhou por meta batida no mês $BonusMensal<br>";
                                echo "Valor ganho por meta batida na semana $TotalBonusSemanal<br>";
                                echo "Valor ganho por meta exedida na semana $TotalExcedenteSemanal<br>";
                                echo "Valor total de $vendedor com bonus e salário minimo=$SomaTotal</h6>";

                                ?>
    </div>


</body>

</html>