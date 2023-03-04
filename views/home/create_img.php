
<?php 
 include_once(dirname(__FILE__)."../../../autoload/spl.php");
$galeryController = new GaleryController();
$galeryController->add_images();

$albumController = new AlbumController();
$albums = $albumController->show_albums();

include_once(dirname(__FILE__)."./../template_sections/head.php");
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype='multipart/form-data'>
	<input type="file" name="img_name"><br>

	<select name="album_id">
		<option>Category</option>
		<?php foreach($albums as $show_albums){ ?>
		<option value="<?php echo $show_albums->album_id; ?>"><?php echo $show_albums->album_name;  ?></option>
	<?php } ?>
	</select>
	<input type="submit" name="add_img" value="create image">
</form>

<?php include_once(dirname(__FILE__)."./../template_sections/footer.php"); ?>
