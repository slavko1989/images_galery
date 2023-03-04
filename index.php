<!Doctype html>
<html>
<head>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image gallery</title>
	<link rel = "stylesheet" href="style.css">
</head>
<body>
	<h1>Add images to your albums</h1>
	<div class="full-image" id="fullImgBox">
		<img src="images/2023.jpg" alt="" id="fullImg">
		<span onclick="closeFullImg()">X</span>
	</div>
	<div class="img-gallery">
		<img src="images/2023.jpg" alt="" onclick="openFullImg(this.src)">
		<img src="images/a1.jpg" alt="" onclick="openFullImg(this.src)">
		<img src="images/a2.jpg" alt="" onclick="openFullImg(this.src)">
		<img src="images/ad.jpg" alt="" onclick="openFullImg(this.src)">
		<img src="images/ad1.jpg" alt="" onclick="openFullImg(this.src)">
	</div>
	<script>
		var fullImgBox = document.getElementById("fullImgBox");
		var fullImg = document.getElementById("fullImg");

		function openFullImg(pic){
			fullImgBox.style.display = "flex";
			fullImg.src = pic;
		}

		function closeFullImg(){
						fullImgBox.style.display = "none";

		}
	</script>

</body>
