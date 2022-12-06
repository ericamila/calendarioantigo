<?php
$mes = "Fevereiro";
$feriados = array(
	12 => "Carnaval",
    13 => "Carnaval",
	14 => "Quarta-feira de Cinzas"
);

include "cabecalho.php";

for ($i = -3; $i <= 29; $i++) {
    if (in_array($i, array_keys($feriados))) {
        $x = $feriados[$i];
        if ($i != 0) {
            echo "<td style='background-color: #B0E0E6;'>$i</td>";
        }
    } else {
		if ($i <=0 ) {
			echo "<td ></td>";
		}else{
			echo "<td >$i</td>";
		}
    }
    if ($i % 7 == 3) {
        echo "</tr><tr>";
    }
}

include "rodape.php";
?>