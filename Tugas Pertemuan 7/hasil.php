<?php
        if(isset($_POST)) {
            //data mahasiswa
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            
            $uas = $_POST["uas"];
            $uts = $_POST["uts"];                
            $tgs = $_POST["tugas"];

            //total nilai 
            $total_nilai = ($tgs + $uas + $uts)/3;

            if($total_nilai >= 80){
                ?>
                <h4>Anda lulus dengan predikat A.</h4>
                <?php
            }
        
            elseif ($total_nilai >= 70) {
                ?>
                <h4>Anda lulus dengan predikat B.</h4>
                <?php
            }
        
            elseif ($total_nilai >= 60) {
                ?>
                <h4>Anda lulus dengan predikat C.</h4>
                <?php
            }
        
            else {
                ?>
                <h4>Anda tidak lulus.</h4>
                <?php
            }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="card">
        <h3>Nilai Mahasiswa</h3>
        <form method="GET" action="index.php">
                <label for="nama" id="kiri">Nama Mahasiswa</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama ?>"> <br/>
                <label for="nim" id="kiri">NIM</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim ?>"> <br>
                <label for="ttl" id="kiri" >Total Nilai</label>
                <input type="number" id="ttl" name="ttl" value="<?php echo $total_nilai ?>" >
            </form>
            
    </div>
</body>
</html>