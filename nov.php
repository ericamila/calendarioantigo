<?php
$mes = "Novembro";
$feriados = array(
    02 => "Finados",
    15 => "Proclamação da República"
);

include "cabecalho.php";

for ($i = -4; $i <= 30; $i++) {
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