<?php
include 'functions.php';
$db = include 'database/start.php';
$id = $_GET['id'];
$post = $db -> getOne('posts', $id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">My Blog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link" href="/main/homepage.php">MainPage</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="/main/about.php">About</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<form action="/update.php?id=<?php echo $post['id'];?>" method="POST">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
						</div>
						<div>
							<button class="btn btn-warning">Edit Post</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>