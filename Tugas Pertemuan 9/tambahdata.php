<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
?>
<?php
    include 'koneksi.php';
    if(isset($_POST["submit"])) {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];

        $query = "INSERT INTO mahasiswa(`nim`, `nama`, `alamat`) VALUES ('$nim','$nama','$alamat')";
        mysqli_query($koneksi, $query);
        echo "<script>alert('Data berhasil ditambahkan'); location='index.php';</script>";
    }
?>
<?php include 'navbar.php';?>
<head>
    <title>CRUD - Tambah data</title>
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
            <h3 class="text-center">Tambah Data Mahasiswa</h3>
            <hr>
            <form action="tambahdata.php" method="POST">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" placeholder="Masukkan Nomor Induk Mahasiswa" required  class="form-control">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" required  class="form-control">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat tinggal saat ini" required  class="form-control">
                <a style="width:130px;text-decoration:none;" class="batal text-center" href="index.php">Batal</a>
                <button style="background-color:#1dc2a7;" class="btn text-white" name="submit" type="submit" id="submit">Tambah</button>
            </form>
        </div>
    </div>
</body>