<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }
?>
<?php
    include 'koneksi.php';

    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<?php include 'navbar.php'; ?>
<head>
    <style>
        .plus{
            padding-left:20px;
            text-decoration:none;
            color:rgb(50,224,196);
            font-size:20px;
        }
        
    </style>
    <title>CRUD - Pegawai</title>
</head> 
<body>
<div class="container">
        <div class="card shadow">
            <h3 class="text-center">Data Mahasiswa</h3> <hr>
            <div class="row bg-secondary text-white text-center" style="padding:10px;">
                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">
                    <h6>No.</h6>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
                    <h6>NIM</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                    <h6>Nama</h6>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-4 col-sm-4">
                    <h6>Alamat</h6>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-1 col-sm-1">
                    <h6>Opsi <a class="plus" href="tambahdata.php"><span><i class="fa fa-plus-circle"></i></span></a></h6>
                </div>
            </div>
            <?php 
            $no=1;
            while($data = mysqli_fetch_assoc($result) ) { ?>
                <div class="row" style="padding:5px;">
                    <div class="col-lg-1 col-md-1 col-xs-2 col-sm-2 text-center">
                        <?php echo $no++ ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
                        <?php echo $data['nim'] ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                        <?php echo $data['nama'] ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-4 col-sm-4">
                        <?php echo $data['alamat'] ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
                        <button style="float:left;margin-left:38%;" class="btn btn-success" type="submit"><a href="updatedata.php?nim=<?= $data["nim"];?>" class="text-white"><i class="fa fa-edit fa-md"></i></a></button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>