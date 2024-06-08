<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Table</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/table.css">
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
            <h1>ITEM TABLE</h1>
            <h4>Welcome, <?php echo $username; ?>!</h4>
        </header>

        <br>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../table/table.php">Table</a>
                        </li>
                    </ul>

                    <a href="../auth/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </nav>

        <br>

        <!-- Table -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>List of Items</h2>
                <a href="form.php" class="btn btn-outline-light btn-lg">Add</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Item name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once "connection.php";

                    $items = $conn->query("SELECT * FROM item");
                    $no = 1;

                    foreach ($items as $row) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>Rp" . number_format($row['price'], 0, '.', ',') . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td> 
                                    <a href='form.php?id=" . $row['id'] . "' class='btn btn-outline-warning'>Edit</a>
                                    <a href='delete.php?id=" . $row['id'] . "' class='btn btn-outline-danger'>Delete</a>
                                  </td>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>