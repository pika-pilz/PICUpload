<html>
  <head>
		<title>Image Hosting</title>
		<?php
			if($_POST['upload'])
			{
				$dateityp = GetImageSize($_FILES['datei']['tmp_name']);
				$dateiname = $_FILES['datei']['name'];
				if($dateityp[2] != 0)
				{
					if($_FILES['datei']['size'] < 2097252)
					{
						move_uploaded_file($_FILES['datei']['tmp_name'], "upload/$dateiname");
						echo "Dein Bild wurde Erfolgreich hochgeladen.";
						echo "Link zur Grafik: <a href='http://url.de/upload/$dateiname'>http://url/upload/$dateiname</a>";
					}
					else
					{
						echo "Die Grafik darf maximal 2 MB groß sein.";
					}
				}
				else
				{
					echo "Es werden nur Bildformate wie Gif, Png und Jpg akzeptiert.";
				}
			}
			?>
	</head>
	<body>
	<!-- ein MB = 2.097.252 Bytes -->
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="datei"><br>
		<input type="submit" value="Hochladen" name="upload">
	</form
	</body>
</html>
