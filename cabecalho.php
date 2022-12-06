<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="css/principal.css" rel="stylesheet"/>
  <title>Calendário 2024</title>
</head>
<body>
  <header>
	<h1>Calendário 2024</h1>
  </header>
       <main>

           <br><br>
		   <section>
    <fieldset>
        <legend>2024</legend>

        <?php
        $semana = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb');
        ?> 

        <table id="tabelas" align="center" border="1">
            <tr>
                <th colspan='7'><?php echo $mes ?></th>
            </tr>
            <tr>
                <?php
                foreach ($semana as $value) {
                    echo "<td align='center'>" . $value . "</td>";
                }
                ?>
            </tr>
	
