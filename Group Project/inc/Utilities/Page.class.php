<?php

class Page
{

	public static $title = "Set Title!";

	static function header()
	{ ?>

		<!DOCTYPE html>
		<html lang="en">

		<head>
			<title>Group Project</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--===============================================================================================-->
			<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
			<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<!--===============================================================================================-->
		</head>

		<body>

			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
					<div class="wrap-login100">



					<?php }

					static function footer()
					{ ?>

					</div>
				</div>
			</div>
			<!--===============================================================================================-->
			<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/animsition/js/animsition.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/bootstrap/js/popper.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/select2/select2.min.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/daterangepicker/moment.min.js"></script>
			<script src="vendor/daterangepicker/daterangepicker.js"></script>
			<!--===============================================================================================-->
			<script src="vendor/countdowntime/countdowntime.js"></script>
			<!--===============================================================================================-->
			<script src="js/main.js"></script>

		</body>

		</html>
	<?php
	}
	static function showlogin()
	{    ?>

		<form action="" method="POST" class="login100-form validate-form">
			<span class="login100-form-logo">
				<i class="zmdi zmdi-landscape"></i>
			</span>

			<span class="login100-form-title p-b-34 p-t-27">
				Log in
			</span>

			<div class="wrap-input100 validate-input" data-validate="Enter username">
				<input class="input100" type="text" name="username" placeholder="Username">
				<span class="focus-input100" data-placeholder="&#xf207;"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Enter password">
				<input class="input100" type="password" name="password" placeholder="Password">
				<span class="focus-input100" data-placeholder="&#xf191;"></span>
			</div>

			<div class="container-login100-form-btn">
				<input class="login100-form-btn" type="submit" value="Log in">
			</div>

		</form>

	<?php }

	static function mainpage()
	{ ?>
		<form class="login100-form validate-form" action="" method="POST">
			<input class="login100-form-btn" type="submit" name="viewTrendyPost" value="View Trendy Post">
			<input class="login100-form-btn" type="submit" name="createAlbum" value="Create New Album">
			<input class="login100-form-btn" type="submit" name="deleteAlbum" value="Delete your Albums">
			<input class="login100-form-btn" type="submit" name="updateAlbum" value="Edit your Albums">
			<input class="login100-form-btn" type="submit" name="showAlbum" value="Show my Album">
			<input class="login100-form-btn" type="submit" name="logout" value="Log out">
		</form>
	<?php
	}

	static function addimageform($albums)
	{
		if (count($albums) == 0) {
			echo "You have no album curently<br>";
			echo "Go and create one.";
		} else {
			?>
			<form method="POST" action="" class="login100-form validate-form">
				<h6>Which album do you want to add this image?</h6>
				<?php
				foreach ($albums as $album) { ?>
					<input type="radio" name="addradio" value=<?php echo $album->getAlbumID(); ?>><?php echo $album->getAlbumName(); ?>
				<?php
				} ?>
				<input class="login100-form-btn" type="submit" name="addbtn" value="Add">
			</form>
		<?php }
	}

	static function deletealbum($albums)
	{
		if (count($albums) == 0) {
			echo "You have no album curently<br>";
			echo "Go and create one.";
		} else {
			?>
			<form method="POST" action="" class="login100-form validate-form">
				<h6>Which album do you want to delete?</h6>
				<?php
				foreach ($albums as $album) { ?>
					<input type="radio" name="deleteradio" value=<?php echo $album->getAlbumID(); ?>><?php echo $album->getAlbumName(); ?>
				<?php
				} ?>
				<input class="login100-form-btn" type="submit" name="deletebtn" value="Delete">
			</form>
		<?php }
	}

	static function updatealbum($albums)
	{
		if (count($albums) == 0) {
			echo "You have no album curently<br>";
			echo "Go and create one.";
		} else {
			?>
			<form method="POST" action="" class="login100-form validate-form">
				<h6>Which album do you want to edit?</h6>
				<?php
				foreach ($albums as $album) { ?>
					<input type="radio" name="editradio" value=<?php echo $album->getAlbumID(); ?>><?php echo $album->getAlbumName(); ?>
				<?php
				} ?>
				<h6> Your New Album Name: </h6>
				<input class="wrap-input100 validate-input" type="input" name="newname">
				<input class="login100-form-btn" type="submit" name="updatebtn" value="Edit">
			</form>
		<?php }
	}


	static function createalbum()
	{ ?>
		<h6>Create New Album</h6>
		<form method="POST" action="" class="login100-form validate-form">
			<label for="newalbumname" value="Album Name">
				<input class="wrap-input100 validate-input" type="input" name="newalbumname">
				<input class="login100-form-btn" type="submit" name="createbtn" value="Create">
		</form>

	<?php }

	static function albumpage($Albums)
	{ ?>
		<form method="POST" action="" class="login100-form validate-form">
			<TABLE>
				<TR>
					<TD>Your Albums:</TD>
				</TR>
				<?php
				if (count($Albums) == 0) { ?>
					<TR>
						<TD> You have no album currently</TD>
					</TR>
					<TR>
						<TD>You can create your albums in previous page</TD>
					<TR>
					<?php }
					foreach ($Albums as $Album) { ?>

					<TR>
						<TD>
							<input type="radio" name="albumid" value=<?php echo $Album->getAlbumID(); ?>><?php echo $Album->getAlbumName(); ?>
						</TD>
					</TR><?php
						} ?>
			</TABLE>
			<input class="login100-form-btn" type="submit" name="showalbum" value="Check Album">
		</form>
		<form class="login100-form validate-form" action="" method="POST">
			<input class="login100-form-btn" type="submit" name="back" value="Go back">
			<input class="login100-form-btn" type="submit" name="logout" value="Log out">
		</form>
	<?php
	}



	static function showimages($AlbumID)
	{
		$Album = AlbumDAO::getAlbum($AlbumID);
		echo "Images in Album: " . $Album->getAlbumName();
		$posts = PostDAO::getPosts($AlbumID);
		//var_dump($posts);?>
		<div style="display: flex, flex-direction: row, flex-wrap: wrap, width: 1000px">
		<?php if (count($posts) == 0) { ?>
				<h6>You have no image in this album.</h6>
		<?php }
		foreach ($posts as $post) {
			?>
			<div class="card" style="width: 18rem;">
			<?php
			if($post->getImageType() == "image/jpeg")
			{
			?>
					<img src="<?php echo $post->getImageURL(); ?>" class='card-img-top'>
		<?php } 
				else if($post->getImageType() == "video/mp4")
				{?>
						<video autoplay loop="loop" style="width: auto; height: auto;">
						<source src="<?php echo $post->getImageURL(); ?>" type="video/mp4"></source>
					</video>
				<?php	
				}?>
			</div>
		<?php }?>
			</div>
	<?php }



	static function createList($posts)
	{
		?>
		<div style="display: flex, flex-direction: row, flex-wrap: wrap, width: 1000px">
			<?php

			$count = 0;
			foreach ($posts as $post) {
				if (!isset($post->images)) continue;
				// var_dump($post);
				Page::createItem($post);
				$count++;
				if ($count == 30) break;
			}

			?>
		</div>
	<?php
	}

	static function createItem($item)
	{
		?>
			<div class="card" style="width: 18rem;">
				<?php
					//var_dump($item->images[0]);
					Page::createMedia($item->images[0]);
				?>
				<div class="card-body">
					<h5 class="card-title"><?php echo $item->title ?></h5>
					<a href="?url=<?php echo $item->images[0]->link; ?>&&type=<?php echo $item->images[0]->type; ?>" class="btn btn-primary">Save to my album</a>
				</div>
			</div>
		<?php
	}

	static function createMedia($image)
	{
		// var_dump($image);
		switch ($image->type)
		{
			case "image/jpeg":
				$src = $image->link;
				echo "<img src='" . $src . "' class='card-img-top'>";
				break;
			case "video/mp4":
				$src = $image->mp4;
				?>
					<video autoplay loop="loop" style="width: auto; height: auto;">
						<source src="<?php echo $src ?>" type="video/mp4"></source>
					</video>
				<?php
				break;
		}
	}
}

?>