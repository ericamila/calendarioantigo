<?php
$mes = "Maio";
$feriados = array(
    01 => "Dia do Trabalho",
	30 => "Corpus Christi"
);

include "cabecalho.php";

for ($i = -2; $i <= 31; $i++) {
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
    if ($i % 7 == 4) {
        echo "</tr><tr>";
    }
}

include "rodape.php";
?>