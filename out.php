<?php
$mes = "Outubro";
$feriados = array(
    12 => "Nossa Senhora Aparecida",
    28 => "Dia do Servidor Público"
);

include "cabecalho.php";

for ($i = -1; $i <= 31; $i++) {
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
    if ($i % 7 == 5) {
        echo "</tr><tr>";
    }
}

include "rodape.php";
?>