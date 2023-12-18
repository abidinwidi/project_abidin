<?php
session_start();

if (isset($_SESSION['login'])) { //jika sessionnya bukan login
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- form -->
    <div class="container">
        <h2 class="text-center">Input Data</h2>
    <form action="vendor/system.php" method="POST">
        <input type="hidden" name="form" value="form1">

    
    <div class="my-3">
        <label  for="inputPhone" class="form-label">NAMA:</label>
        <input type="text" name="namadiweb" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">KELAS:</label>
        <input type="text" name="kelasdiweb" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">JURUSAN:</label>
        <input type="text" name="jurusandiweb" class="form-control" id="inputPhone">
    </div>

    <div class="py-3">
        <label for="inputAddress" class="form-label">ALAMAT:</label>
        <input type="text" name="alamatdiweb" class="form-control" id="inputAddress">
    </div>
    <div class="py-3">
        <label for="inputAddress" class="form-label">JK:</label>
        <input type="text" name="jkdiweb" class="form-control" id="inputAddress">
    </div>

    <div id="liveAlertPlaceholder"></div>
        <button type="submit" class="btn btn-secondary" id="liveAlertBtn">submit</button>
        <!-- <button type="submit" class="btn btn-dark">Submit</button> -->
    </form>
    </div>
    

    <!-- end form -->
    
    <!-- <?php
    include "vendor/konek.php";
    ?> -->
    <div class="my-5" >
    <table border="1px" cellspacing="0px" cellpadding="10px" class="table table-bordered ">

        <h2 class="text-center">Tabel Siswa</h2>
        <tr class="table-dark">
            <td>NO</td>
            <td>NAMA</td>
            <td>KELAS</td>
            <td>JURUSAN</td>
            <td>ALAMAT</td>
            <td>JK</td>
            <td></td>
        </tr>

    <?php
    $sql = "select * from tb_siswa";
    $ambil = mysqli_query($kon, $sql);
    $nu = 0;
    foreach ($ambil as $key){
        $nu ++;
         $id = $key['NO'];
         $nm = $key['NAMA'];
         $kl = $key['KELAS'];
         $jr = $key['JURUSAN'];
         $alm = $key['ALAMAT'];
         $jk = $key['JK'];
    
    ?>
        
        <tr class="table-primary">
            <td><?= $nu; ?></td>
            <td><?= $nm; ?></td>
            <td><?= $kl; ?></td>
            <td><?= $jr; ?></td>
            <td><?= $alm; ?></td>
            <td><?= $jk; ?></td>
            <td><button type="button" class="btn btn-outline-primary"> <a href="edit.php?id=<?=$id?>" style="text-decoration: none;">edit</button></a>
            <button type="button" class="btn btn-outline-primary"> <a href="delete.php?del=<?=$id?>" style="text-decoration: none;">hapus</button></a></td>
            
        </tr>
    <?php }; ?>
    </table>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <script>
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Nice, you triggered this alert message!', 'success')
  })
}
        </script>
</body>
</html>

<?php
}else {
  header('location: login.php');
  exit();
}

?>