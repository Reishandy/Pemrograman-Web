<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>SS2-V5 A1</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../dashboard.css">
</head>
<body>

<!-- Check login state -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../../auth/login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="p-5 centered-div">

        <!-- Header -->
        <header>
            <h1>Just some Dashboard</h1>
            <h4>Welcome, <?php echo $username; ?>!</h4>
        </header>

        <br>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../about.php">About</a>
                        </li>
                    </ul>

                    <a href="../../auth/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </nav>

        <br>

        <!-- Articles -->
        <article>
            <div class="isi">
                <div class="judul">
                    SS2-V5 A1
                </div>
                <img src="../../assets/SS2_V5_A1_3.jpg" alt="SS2-V5 A1">
                <p>Varian SS2-V5 yang mendapatkan beberapa upgrade untuk meningkatkan performanya. Popor lipat yang
                    menjadi standar pada SS2-V5 diganti dengan popor model teleskopik. Pada bagian handguard, disematkan
                    rail pada kiri, kanan, atas, dan bawah untuk memasang berbagai aksesoris. Pada rail bawah, sudah
                    terpasang sebuah vertical foregrip yang dapat menambah ergonomi dan kenyamanan dalam penggunaan
                    senjata. Selain itu, pisir model carry handle diganti dengan model lipat pada rail. Pisir dan pijera
                    ini dapat diganti dengan berbagai jenis teleskop yang dipasang pada rail senjata.</p>
            </div>
        </article>

        <br>

        <!-- Footer -->
        <footer>
            <h4>Copyright &copy Muhammad Akbar Reishandy</h4>
        </footer>

    </div>
</div>

</body>
</html>