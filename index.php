<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;400&display=swap" rel="stylesheet">
</head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Yashvi Gala</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/zurich.jpg" alt="zurich" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Zurich</h3>
        <p>We had such a great time in Zurich!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/zermatt.jpg" alt="zermatt" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Zermatt</h3>
        <p>Thank you, Zermatt!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/saint-moritz.jpg" alt="saint-moritz" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Saint-moritz</h3>
        <p>We love Saint-moritz!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/matterhorn.jpg" alt="matterhorn" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Matterhorn</h3>
        <p>Thank you, Matterhorn!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/lake-maggiore.jpg" alt="lake-maggiore" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Lake-maggiore</h3>
        <p>Thank you, Lake-maggiore!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div>
        <h2 class="text-center">About us<h2>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>