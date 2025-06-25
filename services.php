<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Portfolio Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo" style="height: 85px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log-out</a>
            </li>
          </ul>
        </div>
      </nav>
</header>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Services</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/1.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Mixed Best Seller</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <article class="card shadow">
          <img class="rounded card-img-top" src="pics/2.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Mixed Cubes & Gummies</a>
            </h4>
           <p class="cars-text">$1.00</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <article class="card shadow">
          <img class="rounded card-img-top" src="pics/3.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Oily Gummies</a>
            </h4>
           <p class="cars-text">$1.00</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <article class="card shadow">
          <img class="rounded card-img-top" src="pics/4.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Bear Gummies</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <article class="card shadow">
          <img class="rounded card-img-top" src="pics/5.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Worm Gummies</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <article class="card shadow">
          <img class="rounded card-img-top" src="pics/6.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Snake Gummies</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/7.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Mixed Sugar & Sour</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/8.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Mixed Sour & Oily</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/9.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Ring Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/10.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="pics/11.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Cola Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Shark Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00<br>
                dadwfsefsfsefsefsdfefsdfsefsdfse
              </p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <article class="card shadow">
            <img class="rounded card-img-top" src="sugar.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.html">Sugar Gummies</a>
              </h4>
              <p class="cars-text">$1.00</p>
              <a href="blog-single.html" class="btn btn-xs btn-primary">Add to cart</a>
            </div>
          </article>
        </div>
    </div>
  </div>
</section>
<!-- /portfolio -->


<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright ©<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> a theme by <a href="themefisher.com">themefisher.com</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
