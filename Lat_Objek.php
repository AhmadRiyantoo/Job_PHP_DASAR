<html>
<head>
<title>Toturial PHP</title>
</head>
<Body>
<?php 

	class Cara_makan
	{	function pisang()
		{
			return "dibuka kulitnya terlebih dahulu";
			}
	}
	$obj = new cara_makan;
echo "cara makan pisang adalah dengan cara" . $obj->pisang(); ?>
</body>
</html>