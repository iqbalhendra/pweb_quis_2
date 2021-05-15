<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: login.php");
    exit;
}

?>
<html>

<head>
    <title>
        Index Page
    </title>
    <style>
        .wrapper {
            width: 400px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            margin: 10% auto;
            padding: 40px;
        }

        form input {
            width: 100%;
            height: 40px;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h3>Selamat datang <?php echo $_SESSION['name']?></h3>
        <p>
        <ul>
            <li>NIM : <?php echo $_SESSION['nim']?></li>
            <li>Email : <?php echo $_SESSION['email']?></li>
            <li>Nomor Telepon : <?php echo $_SESSION['no_telp']?></li>
        </ul>
        </p>
        <p>Anda sudah berhasil login.</p>
        <p>Apabila ingin Keluar bisa klik tombol di bawah ini<br>
            <a href="logout.php">Logout</a>
        </p>
    </div>
</body>

</html>