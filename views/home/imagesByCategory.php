<?php
 include_once(dirname(__FILE__)."../../../autoload/spl.php");

		$albumController = new AlbumController();
		$showGaleryByAlbum = $albumController->get_category_album();
?>
<!Doctype html>
<html>
<head>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image gallery</title>
	<link rel = "stylesheet" href="../style.css">
</head>
<body>

<div class="">
		<ul class="list">
			<li><a href="../../../images_galery/views/index.php">GO TO HOME PAGE</a></li>
		</ul>
	</div>
<div class="full-image" id="fullImgBox">
	<img src="images/2023.jpg" alt="" id="fullImg">
	<span onclick="closeFullImg()">X</span>
</div>
<div class="img-gallery">
	<?php foreach ($showGaleryByAlbum as $show_img) { ?>
	<img src="../../images/<?php echo $show_img->img_name; ?>" alt="" onclick="openFullImg(this.src)">
	<?php } ?>
</div>
<?php include_once("../../../images_galery/javascript/galery_js.php"); ?>