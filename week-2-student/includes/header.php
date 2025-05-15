<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- because the description and title must be different on each page we will use a varibale for them-->
	<meta name="description" content="<?php echo $pageDesc; ?>">
	<title><?php $pageTitle; ?></title>

	<!-- add bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>


	<!-- add google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


	<!-- add custom css -->
	<link rel="stylesheet" href="./css/custom-css.css">
</head>
<body>
<!-- the header element will be the last element added to this file. The html and the body will be closed in the footer.php -->
<header>
	<div>
		<!-- logo container -->
		 <a href="index.php"> <img src="./img/php-logo.png" alt="header logo"></a>
	</div>
	<menu>
		<li><a href="index.php">First page</a></li>
		<li><a href="2nd.php">2nd page</a></li>
		<li><a href="3rd.php">3rd page</a></li>
		<li><a href="4th.php">4th page</a></li>
	</menu>
</header>
</html>