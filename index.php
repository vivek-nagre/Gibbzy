<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gibbzy_shoot</title>
  <!-- bootstrap link -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="gibbzy.css">
  <style>
    .carousel-item img {
      width: 100vw;
      height: 500px;

    }

    * {
      text-transform: capitalize;
    }
  </style>
</head>

<body>


  <!-- my nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./logo/logo_2.png" style="border-radius: 20%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              shoot
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Pre-Weeding</a></li>
              <li><a class="dropdown-item" href="#">modeling</a></li>
              <li><a class="dropdown-item" href="#">Weeding</a></li>
              <li><a class="dropdown-item" href="#">aniversary</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">valantine offer <span
                    class="badge rounded-pill bg-light text-danger">new</span></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php" tabindex="-1" aria-disabled="true">contact me</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- navbar finshed -->

  <!-- slider/crosal -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/camera.jpg" class="d-block w-100" alt="logo/logo_2.png">
        <div class="carousel-caption d-none d-md-block">

          <h5>There is one thing the photo must contain – the humanity of the moment.</h5>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/nature-1.jpg" class="d-block w-100" alt="logo/logo_2.png">
        <div class="carousel-caption d-none d-md-block">
          <h5>Photography is the story I fail to put into words</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/reflection.jpg" class="d-block w-100" alt="logo/logo_2.png">
        <div class="carousel-caption d-none d-md-block">
          <h5>Photography deals exquisitely with appearances, but nothing is what it appears to be.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- crousal end -->
  <hr class="dropdown-divider">

  <!-- phootography qoute -->
  <div class="container">
    <div class="alert alert-dark text-center" role="alert" style="font-weight: bold;">
      Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It
      remembers little things, long after you have forgotten everything.
    </div>
  </div>
  <hr class="dropdown-divider">

  <!-- about phography -->
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="image/prewewd.jpg" class="card-img-top" alt="logo/logo_2.png">
        <div class="card-body">
          <h5 class="card-title">Pre-Weeding</h5>
          <p class="card-text">Happiness is anyone and anything at all, that's loved by you.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/ani.jpg" class="card-img-top" alt="logo/logo_2.png">
        <div class="card-body">
          <h5 class="card-title">aniversary</h5>
          <p class="card-text">Best Pre wedding Photographer and filmmaker in Pune Mumbai India.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/modeling.jpg" class="card-img-top" alt="logo/logo_2.png">
        <div class="card-body">
          <h5 class="card-title">modeling</h5>
          <p class="card-text">Best in class studio for newborn photoshoot in Pune</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="image/merriage.jpg" class="card-img-top" alt="logo/logo_2.png">
        <div class="card-body">
          <h5 class="card-title">merriage</h5>
          <p class="card-text">Save this precious moments in Our Photographs, Best merriage Photos</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="foot">
    &copy;all right's reserverd @ViGo soft
    <br> design & devloped by <a href="http://viveknagre.tk/" target=_blank>Vivek-Nagre</a>
  </footer>
  <!-- jquery -->
  <script src="./js/jquery-3.5.1.min.js"></script>

  <script>
    $(document).ready(function () {
      // // script for naigation
      // $('a').mouseover(function () {
      //   $(this).fadeOut(1000).css('color', 'red')

      // });
      // $('a').mouseout(function () {
      //   $('a').fadeIn(500).css('color', 'black')
      // });
      // crousal
      // $('#carouselExampleCaptions').mouseover(function () {
      //     $(this).fadeOut(5000)


      // });
      // $('#carouselExampleCaptions').mouseout(function () {
      //     $(this).fadeIn('slow')
      // });

      // card jquery
      $('.card-img-top').mouseover(function () {
        $(this).animate({ height: "1000px" });
        console.log('done')
      });
      $('.card-img-top').mouseout(function () {
        $(this).animate({ height: "400px" });
        // console.log('done')
      });
    })
        //
  </script>
  <!-- javascrpit -->
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>