<?php
include "vendor/konek.php";

session_start();

if (isset($_SESSION['login'])) { //jika sessionnya bukan login
  


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <body>
    <?php
    $data_siswa = mysqli_query($kon,"SELECT * FROM tb_siswa where NO =".$_GET['id']);
    foreach ($data_siswa as $key) {
        $id = $key['NO'];
        $nm = $key['NAMA'];
         $kl = $key['KELAS']; 
         $jr = $key['JURUSAN'];
         $alm = $key['ALAMAT'];
         $jk = $key['JK'];
    }
    ?>

    <h1>
      <?= $nm; ?>
      <?= $kl; ?>
      <?= $jr; ?>
      <?= $alm; ?>
      <?= $jk; ?>
    </h1>

    <!-- form -->
    <div class="container bg-primary text-light">
    <form action="vendor/system.php ?id=<?= $id; ?>" method="POST">
      <input type="hidden" name="form" value="form2">
    
    <div class="my-3">
        <label  for="inputPhone" class="form-label">NAMA:</label>
        <input type="text" name="Enamadiweb" value="<?= $nm; ?>" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">KELAS:</label>
        <input type="text" name="Ekelasdiweb" value="<?= $kl; ?>" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">JURUSAN:</label>
        <input type="text" name="Ejurusandiweb" value="<?= $jr ?>" class="form-control" id="inputPhone">
    </div>

    <div class="py-3">
        <label for="inputAddress" class="form-label">ALAMAT:</label>
        <input type="text" name="Ealamatdiweb" value="<?= $alm ?>" class="form-control" id="inputAddress">
    </div>
    <div class="py-3">
        <label for="inputAddress" class="form-label">JK:</label>
        <input type="text" name="Ejkdiweb" value="<?= $jk ?>" class="form-control" id="inputAddress">
    </div>

    <div id="liveAlertPlaceholder"></div>
    <button type="submit" class="btn btn-secondary" id="liveAlertBtn">kirim</button>
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}else {
  header("location: login.php");
  exit();
}

?>
