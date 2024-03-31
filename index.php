<?php
// Lakukan pengecekan apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan pengecekan sederhana, misalnya dengan menggunakan data statis
    $valid_username = "admin";
    $valid_password = "password123";

    // Periksa apakah data yang dimasukkan sesuai dengan data yang valid
    if ($username === $valid_username && $password === $valid_password) {
        // Jika valid, arahkan ke halaman selanjutnya atau tampilkan pesan berhasil login
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        // Jika tidak valid, tampilkan pesan error atau kembalikan ke halaman login
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">

                    <!-------------      image     ------------->


                    <div class="text">
                        <p>Pendaki Menyatu Dengan Alam</p>
                    </div>

                </div>

                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>welcome to outdoor</header>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="input-field">
                                <label for="usename">Username</label><br>
                                <input type="text" class="input" id="email" required=""><br>


                            </div>
                            <div class="input-field">
                                <label for="password">Password</label><br>
                                <input type="password" class="input" id="pass" required=""><br><br>

                            </div>
                            <div class="input-field">

                                <input type="submit" class="submit" value="login">
                            </div>
                            <div class="signin">
                                <span>Liat produk di sini? <a href="produk.php">Daftar produk</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>