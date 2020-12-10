<?php include 'koneksi.php';
session_start();?>
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
    <style>
        nav{
            font-family: 'Montserrat', sans-serif;
            font-weight:500;
            top:0;
            width:100%;
            display:flex;
            position:fixed;
            z-index:999;
            background-color:#24252A;
            color:#edf0f1;
            font-size:15px;
            justify-content: space-between;
            align-items:center;
            padding:0px 10%;
            box-sizing:border-box;
        }
        .sd{
            padding-top:10px;
        }
        .lg{
            border-radius:15px;
            padding:5px 10px;
            text-decoration:none;
            color:rgb(50,224,196);
            background-color:rgba(237,240,241,0);
        }
        .lg:hover{
            color:#24252A;
            background-color:rgba(50,224,196,1);
        }
        .aktif{
            text-decoration:none;
            color:rgb(50,224,196);
        }
    </style>
</head>
<body>
    <nav>
        <p class="sd"> Selamat datang, <a class="aktif" href=""><?php echo $_SESSION['nama_user'] ?></a>.</p>
        <a class="lg" href="logout.php">Logout</a>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>