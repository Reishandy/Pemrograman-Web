<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS Search</title>
    <style>
        * {
            font-family: 'JetBrains Mono', monospace;
        }

        h1 {
            text-transform: uppercase;
            color: salmon;
        }

        table {
            border: 1px solid #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        th, td {
            border: 1px solid #ddeeee;
            padding: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center">Product Search - Coding</h1>
    <form method="GET" action="index.php" style="text-align: center">
        <label for="search">Search: </label>
        <input type="text" name="keyword" id="search" value="<?php if (isset($_GET['keyword'])) {
            echo $_GET['keyword'];
        }?>" placeholder="Keyword">
    </form>

    <table>
        <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "connection.php";

        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query = "SELECT * FROM product WHERE product_id LIKE '%$keyword%' OR product_name LIKE '%$keyword%' OR product_description LIKE '%$keyword%' ORDER BY id ASC";
        } else {
            $query = "SELECT * FROM product ORDER BY id ASC";
        }

        $result = $conn->query($query);

        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['product_description'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

</body>
</html>