<?php
$mes = "Abril";
$feriados = array(
    21 => "Tiradentes"
);

include "cabecalho.php";

for ($i = 0; $i <= 30; $i++) {
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
    if ($i % 7 == 6) {
        echo "</tr><tr>";
    }
}

include "rodape.php";
?>