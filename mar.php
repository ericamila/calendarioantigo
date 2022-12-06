<?php
$mes = "Março";
$feriados = array(
    29 => "Sexta-feira Santa",
	31 => "Páscoa"
);

include "cabecalho.php";

for ($i = -4; $i <= 31; $i++) {
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
    if ($i % 7 == 2) {
        echo "</tr><tr>";
    }
}

include "rodape.php";
?>