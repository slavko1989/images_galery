<?php include_once(dirname(__FILE__)."../../../autoload/spl.php");
		$galeryController = new GaleryController();
		$show = $galeryController->show_images();

		$albumController = new AlbumController();
		$showGaleryByAlbum = $albumController->show_albums();
?>
<div class="">
		<ul class="list">
			<li><a href="home/create_album.php">Add albums</a></li>
			<li><a href="home/create_img.php">Add images</a></li>
			ALBUMS
			<?php 
			if(is_array($showGaleryByAlbum) or is_object($showGaleryByAlbum)){
			foreach ($showGaleryByAlbum as $album)
			 { ?>
			<li>
				<a href="../../images_galery/views/home/imagesByCategory.php?album_id=<?php echo $album->album_id; ?>"><?php echo $album->album_name; ?></a>
			</li>
			<?php } } ?>
		</ul>
	</div>
<div class="full-image" id="fullImgBox">
	<img src="images/2023.jpg" alt="" id="fullImg">
	<span onclick="closeFullImg()">X</span>
</div>
<div class="img-gallery">
	<?php foreach ($show as $show_img) { ?>
	<img src="../images/<?php echo $show_img->img_name; ?>" alt="" onclick="openFullImg(this.src)">
	<?php } ?>
</div>
<?php include_once("../javascript/galery_js.php"); ?>