<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Using single SQL</title>
		<style>
			table,td,th
			{
				padding:10px;
				border-collapse:collapse;
				font-family:Georgia, "Times New Roman", Times, serif;
				border:solid #ddd 2px;
			}
		</style>
	</head>
	<body>
		<table align="center" border="1" width="100%">
			<tr>
			<th>id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>jabatan</th>
			</tr>
			<?php
			$con = mysqli_connect("172.19.0.2","root", "toor", "trucorp");
			$res = mysqli_query($con, "SELECT * FROM users");
			if(!$con){
				echo "tidak bisa konek ke MySQL" . PHP_EOL; 
				exit;
			}
			else{
				while($row = mysqli_fetch_assoc($res))
				{
				 ?>
				    <tr>
				    <td><p><?php echo $row['id']; ?></p></td>
				    <td><p><?php echo $row['nama']; ?></p></td>
				    <td><p><?php echo $row['alamat']; ?></p></td>
				    <td><p><?php echo $row['jabatan']; ?></p></td>
				    </tr>
				    <?php
                    $total++;
				}
			}
            echo "total user : ".$total;
			mysqli_free_result($res);

			//Closing the connection
			mysqli_close($con);
			?>
		</table>
	</body>
</html>