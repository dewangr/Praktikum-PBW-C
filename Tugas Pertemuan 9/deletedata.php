<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
?>
<?php 
    include 'koneksi.php';
    $id = $_GET["nim"];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $id");
    echo "<script>alert('Data berhasil dihapus.'); location='index.php';</script>";
?>