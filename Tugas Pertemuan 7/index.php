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
        <h3>Data Mahasiswa</h3>
        <div class="container">
            <form method="POST" action="hasil.php">
                <label for="nama" id="kiri">Nama Mahasiswa</label>
                <input type="text" id="nama" name="nama"> <br/>
                <label for="nim" id="kiri">NIM</label>
                <input type="text" id="nim" name="nim" maxlength="10"> <br>
                <label for="tugas" id="kiri">Nilai Tugas</label>
                <input type="number" id="tugas" name="tugas" maxlength="2"> <br>
                <label for="uts" id="kiri">Nilai UTS</label>
                <input type="number" id="uts" name="uts" maxlength="2"> <br> 
                <label for="uas" id="kiri">Nilai UAS</label>
                <input type="number" id="uas" name="uas" maxlength="2"> <br>
                <input type="submit" class="submit"></input>
            </form>
            
        </div>
    </div>
</body>
</html>