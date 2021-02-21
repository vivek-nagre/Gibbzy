<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="gibbzy.css?v= echo time();">

</head>
<body style="background-color: azure">
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./logo/logo_2.png" style="border-radius: 20%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link active" href="contact.php" tabindex="-1" aria-disabled="true">contact me</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- contact form -->
<div class="container my_form mt-4">
  <!-- actual form -->
  <form class="row g-3" action="user.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="name" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Surname</label>
    <input type="text" class="form-control" id="inputPassword4" name="lstname" >
  </div><div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">contact</label>
    <input type="digit" class="form-control" id="inputPassword4" name="num" >
  </div>
  <div class="col-12 ">
    <label for="inputAddress" class="form-label">Your requirements</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"  name="comment" style="height:93px;text-transform:capitalize !important;">
  </div>
 
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="add"  placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" >
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label"  >State</label>
    <select id="inputState" class="form-select" name="state">
      <option>Choose...</option>
      <option >Maharashtra</option>
      <option >Karnataka</option>
      <option>Goa</option>
      <option>Gujrat</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip"  id="inputZip">
  </div>
  <div class="d-grid gap-2 ">

    <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  
</form>
</div> 
<footer id="foot">
        &copy;all right's reserverd @ViGo soft
        <br> design & devloped by <a href="http://viveknagre.tk/" target=_blank>Vivek-Nagre</a>
    </footer>
<!-- bootstarp js -->
<script src="./js/bootstrap.min.js"></script>
</body>
</html>