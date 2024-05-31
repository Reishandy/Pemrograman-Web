<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Contact</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

<!-- Check login state -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
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
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>

                    <a href="../auth/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </nav>

        <br>

        <!-- Articles -->
        <article>
            <div class="isi">
                <div class="judul">
                    My Contacts
                </div>
                <p>You can contact me by: </p>
                <ul>
                    <li>Whatsapp</li>
                    <li>Telegram</li>
                    <li>Instagram</li>
                    <li>Discord</li>
                </ul>
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