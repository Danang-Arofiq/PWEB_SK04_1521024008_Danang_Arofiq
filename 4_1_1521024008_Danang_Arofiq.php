<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 4_1 Danang Arofiq</title>
</head>
<body>
	<?php
		$a="69";
		echo "<p style=font-size:70px>nilai = <b style=text-decoration:underline>$a</b>";
		echo "<br>";
		if (($a >= "0") && ($a <= "59")){
			echo "<p style=font-size:100px><b>hasil = cukup</p>";
		}
		else if (($a >= "59") && ($a <= "85")){
			echo "<p style=font-size:100px><b>hasil = baik</p>";
		}
		else if (($a >= "85") && ($a <= "100")){
			echo "<p style=font-size:100px><b>hasil = baik sekali</p>";
		}
		else {
			echo "<p style=font-size:80px><b>input salah</p>";
		}
	?>

</body>
</html>