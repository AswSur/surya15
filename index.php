<!DOCTYPE html>
<html>
<head>
	<title>Responsive Image Gallery</title>
	<style>
	header {
		background: #333333;
		color: #fff;
		text-align: center;
		padding: 20px;
		border-radius: 10px 10px 0px 0px;
	}
	footer {
		text-align: center;
		font-size: 12px;
		height: 50px;
		line-height: 50px;
color: white;
		background: #333333;
		padding: 20px;
		border-radius: 10px;
	}
	div.gallery {
		border: 1px solid #ccc;
	}
	div.gallery:hover {
		border: 1px solid #F66;
	}
	div.gallery img {
		width: 100%;
		height: 50%;
	}
	div.desc {
		padding: 15px;
		text-align: center;
	}
	.container{
		padding-top: 10px;
		padding-bottom: 10px;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		gap: 10px;
		justify-content: center;
	}
	.responsive {
	width: 29.99999%;
	}
	@media screen and (max-width: 700px) {
		.responsive {
			width: 49.99999%;
			margin: 6px 0;
		}
	}
	@media screen and (max-width: 500px) {
		.responsive {
			width: 100%;
		}
	}
	</style>
</head>
<body>
	<header>
		<h1>Responsive Image Gallery</h1>
	</header>
		<div class="container">
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img1.jpg">
					<img src="images/img1.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img2.jpg">
					<img src="images/img2.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img3.jpg">
					<img src="images/img3.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img4.jpg">
					<img src="images/img4.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img5.jpg">
					<img src="images/img5.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="images/img6.jpg">
					<img src="images/img6.jpg" alt="Dog Photo" width="300"
						height="200">
					</a>
					<div class="desc">Dog Photo</div>
				</div>
			</div>
		</div>
<footer>
Developed by DhanushkumarP
</footer>
</body>
</html>