<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
?>
<?php 
    include 'koneksi.php';
    $id= $_GET["nim"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$id'");
?>
<?php 
    if(isset($_POST["submit"])) {
        $id1 = $_POST["id"];
        $nim1 = $_POST["nim"];
        $nama1 = $_POST["nama"];
        $alamat1 = $_POST["alamat"];

        $query =    "UPDATE mahasiswa SET 
                        nim='$nim1',
                        nama='$nama1',
                        alamat='$alamat1' 
                    WHERE nim = '$id1'";
        mysqli_query($koneksi, $query);
        echo "<script>alert('Data berhasil dirubah'); location='index.php';</script>";
    }
?>
<?php
include 'navbar.php';
?>
<head>
    <title>CRUD - Perbarui data</title>
    <style>
        .batal{
        background-color:rgba(255,0,0,0);
        color:red;
        border-radius:7px;  
        padding:7px 10px;
        }
        .batal:hover{
            background-color:rgba(255,0,0,1);
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card shadow" style="width:700px; margin-left:23%">
            <h3 class="text-center">Perbarui Data Mahasiswa</h3>
            <hr>
            <form action="updatedata.php" method="POST">
            <?php while($data = mysqli_fetch_assoc($result) ) { ?>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?php echo $data['nim'] ?>"  class="form-control">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>" class="form-control">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat'] ?>" class="form-control">
                <a style="width:130px;text-decoration:none;" class="batal text-center" href="index.php">Batal</a>
                <button style="background-color:#1dc2a7;" class="btn text-white" name="submit" type="submit" id="submit">Perbarui</button>
            <?php } ?>
            </form>
        </div>
    </div>
</body>