<?php
session_start();

if (!isset($_SESSION['login'])) { //jika sessionnya bukan login
  

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="cssfrom.css">
</head>

<body>

  <!-- Section: Design Block -->
  <section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Penawaran terbaik <br />

              <span class="text-primary"> untuk bisnis Anda</span>
            </h1>
            
          </div>
          

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form action="vendor/validasi.php" method="post">
                  <!-- 2 column grid layout with text inputs for the first and last names -->

                  <!-- Email input -->
                  <div class="form-outline mb-4">

                    <input type="email" name="emaildiweb" id="form3Example3" class="form-control"

                      placeholder="Emailmu" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="passworddiweb" id="form3Example4" class="form-control"
                      placeholder="Passwordmu" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Centang kalo kamu bukan robot
                    </label>
                  </div>

                  <?php
                  @session_start();
                  if (isset($_SESSION['info'])) {

                  
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert";>
                    <?php echo $_SESSION['info']; ?>
                  </div>

                  <?php 
                  unset($_SESSION['info']); //tidak menerima / menghapus sessi info
                  }
                  
                  ?>

                  <!-- Submit button -->
                  <!-- <div class="d-grid gap-2 d-md-block"> -->
                  <!-- <button type="submit" class="btn btn-primary btn-block m-auto mb-4" style="d-grid gap-2 d-md-block">
                    Sign up
                  </button>
                  </div> -->
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">sign up</button>

                  </div>

                  <!-- Register buttons -->
                  <div class="text-center"><br></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>

<?php
}else {
  header('location: index.php');
  exit();
}

?>