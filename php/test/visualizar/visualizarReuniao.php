<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>BD</title>

  <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
	<a href="../index.php"> <- Voltar</a>
	<h1>Reunião</h1>
	<table>
		<tr>
			<td>Número</td>
			<td>Pauta</td>
			<td>Data</td>
		</tr>
		<?php
			require_once('../info.php');
			$result = getReuniao();
			while ($row = pg_fetch_array($result)){
				?> 
			<tr>
				<td><?php echo $row['numero']; ?></td>
				<td><?php echo $row['pauta']; ?></td>
				<td><?php echo $row['dataInicio']; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>