<?php
include "konek.php";

if (isset($_POST["form"])) {
    $form = $_POST["form"];
    
    if ($form === "form1") {
        include("index.php");

        $NAMA = $_POST['namadiweb'];
        $KELAS = $_POST['kelasdiweb'];
        $JURUSAN = $_POST['jurusandiweb'];
        $ALAMAT = $_POST['alamatdiweb'];
        $JK = $_POST['jkdiweb'];

        echo $NAMA, $KELAS, $JURUSAN, $ALAMAT, $JK;

        $sql = "insert into tb_siswa(NAMA,KELAS,JURUSAN,ALAMAT,JK)values ('$NAMA', '$KELAS', '$JURUSAN', '$ALAMAT', '$JK')";

        mysqli_query ($kon,$sql);
        header("location: ../index.php");

        
    
    }elseif ($form === "form2") {
        include("edit.php");

        $id = $_GET['id'];
        $ENAMA = $_POST['Enamadiweb']; 
        $EKELAS = $_POST['Ekelasdiweb'];
        $EJURUSAN = $_POST['Ejurusandiweb'];
        $EALAMAT = $_POST['Ealamatdiweb'];
        $EJK = $_POST['Ejkdiweb'];

        $edit = "UPDATE tb_siswa SET NAMA='".$ENAMA."', KELAS='".$EKELAS."', JURUSAN='".$EJURUSAN."', ALAMAT='".$EALAMAT."', JK='".$EJK."' WHERE NO=" . $id;

        mysqli_query ($kon,$edit);
        header("location: ../index.php");

    
    } else {
        echo "tidak ditemukan";
    }

} else {
    echo "tentukan dengan parameter 'form'.";
}





?>
