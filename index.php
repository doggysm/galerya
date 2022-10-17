<?php

require ('function.php');
require('images.php');

if (!isUser()){
	header('Location: log.html');
	exit;
}

$images = imgarr();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gallery "SKY"</title>
</head>
<body>
		<div class="images_wrap">
			<?php 	foreach($images as $image) ?>
             
            <img class="images_image" src="<?php $path.htmlspecialchars(urlencode($image['src']))?>" alt="<?$image['alt']?>" />
          	<?php endforeach;?>
		</div>



		<form method="post", enctype="multipart/from-data">
			<a>Выберете файл для загрузки:</a><input type="file" name="image" />
			<input type="submit" value="Загрузить" />
			<a href="/logout.php">Exit</a>
		</form>	
</body>
</html>