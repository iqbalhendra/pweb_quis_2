<?php
session_start();
if(isset($_SESSION['is_login'])) {
    header("location: index.php");
    exit;
 }
?>
<html>

<head>
    <title>Login Page</title>
</head>
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

<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="proses_login.php" method="POST">
            <p>
                <input type="email" placeholder="Masukkan email anda" name="email">
            </p>
            <p>
                <input type="password" placeholder="Masukkan password anda" name="password">
            </p>
            <p>
                <input type="submit" value="Login Now">
            </p>
            <p>*email : iqbal@gmail.com, pass :iqbal123</p>
        </form>
    </div>
</body>

</html>