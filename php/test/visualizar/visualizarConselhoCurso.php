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
	<h1>Conselho Curso</h1>
	<table>
		<tr>
			<td>Representante</td>
			<td>ID</td>
		</tr>
		<?php
			require_once('../info.php');
			$result = getConselhoCurso();
			while ($row = pg_fetch_array($result)){
				?> 
			<tr>
				<td><?php echo $row['representante']; ?></td>
				<td><?php echo $row['id']; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>