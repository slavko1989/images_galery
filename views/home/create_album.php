
<?php 
 include_once(dirname(__FILE__)."../../../autoload/spl.php");
$albumController = new AlbumController();
$albumController->add_album();

include_once(dirname(__FILE__)."./../template_sections/head.php");
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<input type="text" name="album_name"><br>
	<input type="submit" name="add_album" value="create album">
</form>

<?php include_once(dirname(__FILE__)."./../template_sections/footer.php"); ?>
