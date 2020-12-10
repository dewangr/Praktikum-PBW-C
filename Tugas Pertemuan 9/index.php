<?php
    session_start(); 
    if(isset($_SESSION["login"]) ){
        while($_SESSION['jenis_user'] == 'admin'){
            header("Location: pageadmin.php");
            exit;
        }
        header("Location: pagepegawai.php");
        exit;
    }
?>
<?php 
    include 'koneksi.php'; 
?>
<?php if(isset($_POST["login"]) ){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $cek = mysqli_query($koneksi, "SELECT* FROM user where username = '$username'");

    if(mysqli_num_rows($cek) == 1){
        $result = mysqli_fetch_assoc($cek);
        if($password == $result['password'] ) {
            if($result['jenis_user']  == "admin"){
                $_SESSION["login"] = true;
                $_SESSION["nama_user"] = $result['nama_user'];
                $_SESSION["jenis_user"] = $result['jenis_user'];
                header("Location: pageadmin.php");
                exit;
            }
            elseif($result['jenis_user'] == "pegawai"){
                $_SESSION["login"] = true;
                $_SESSION["nama_user"] = $result['nama_user'];
                $_SESSION["jenis_user"] = $result['jenis_user'];
                header("Location: pagepegawai.php");
                exit;
            }
        }
    }
    $error=true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CRUD - Login</title>
</head>
<body>
    <?php 
        if(isset($error)){ ?>
        <p>Login gagal.</p>
    <?php } ?>
    <div class="card shadow" style="width:500px; margin-left:34%">
        <h4 class="text-center">Selamat Datang</h4> 
        <small class="text-center">Silahkan masuk ke akun Anda</small> <hr>
        <form action="" method="post">
            <label for="user">Username</label>
            <input type="text" id="username" name="username" class="form-control" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <label for=""></label>
            <button style="background-color:#1dc2a7;" class="btn text-white" id="login" name="login" type="submit">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>