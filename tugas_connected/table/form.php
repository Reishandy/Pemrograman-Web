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

<!-- Check login state, check edit or add -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

$username = $_SESSION['username'];

# Check if id is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $action = "edit";
} else {
    $action = "add";
}

# Query data if action is edit
if ($action == "edit") {
    require_once "connection.php";
    $query = "SELECT * FROM item WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
}
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

        <!-- From -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>List of Items</h2>
                <a href="table.php" class="btn btn-outline-light btn-lg">Back</a>
            </div>

            <div class="card-body">
                <!-- Indicator -->
                <input type="hidden" name="id" value="<?php echo $item["id"] ?>">

                <form action="" method="post" role="form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                               value="<?php echo $item["name"] ?>" required>
                        <label for="name">Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price"
                               value="<?php echo $item["price"] ?>" required>
                        <label for="price">Price</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="description" name="description" placeholder="Description"
                                  required><?php if ($action == "edit") {echo $item["description"];} ?></textarea>
                        <label for="description">Description</label>
                    </div>

                    <button type="submit" class="btn btn btn-outline-light btn-lg" name="submit" value="save">Save</button>
                </form>
            </div>

            <?php
            if ($_POST["submit"]) {
                require_once "connection.php";

                $name = $_POST["name"];
                $price = $_POST["price"];
                $description = $_POST["description"];

                if ($action == "add") {
                    $query = "INSERT INTO item (name, price, description) VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sds", $name, $price, $description);
                } else {
                    $query = "UPDATE item SET name = ?, price = ?, description = ? WHERE id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sdsi", $name, $price, $description, $id);
                }

                if ($stmt->execute()) {
                    echo "<script>window.location.href = 'table.php'</script>";
                } else {
                    echo "Error: " . $stmt->error;
                }
            }
            ?>
        </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>