<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Login</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="p-5 centered-div">
        <!-- Titles  -->
        <div class="d-flex align-items-center">
            <img src="../assets/uniwara.png" alt="Logo uniwara">
            <h1>LOGIN PAGE</h1>
        </div>
        <h4>No SQL integration</h4>
        <h4>Idk for what :3</h4>

        <br>

        <!-- Error message -->
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "username") {
                echo "<div class='alert alert-danger' role='alert'>Invalid username!</div>";
            } elseif ($_GET['error'] == "password") {
                echo "<div class='alert alert-danger' role='alert'>Invalid password!</div>";
            }
        }
        ?>

        <form action="check-login.php" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="uname"></label>
                <input type="text" class="form-control form-control-lg" id="uname" name="username"
                       placeholder="Enter Username" pattern="[a-zA-Z0-9_]+"
                       required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>

            <div class="form-group">
                <label for="passwdSi"></label>
                <input type="password" class="form-control form-control-lg" id="passwdSi" name="password"
                       placeholder="Enter Password" required>
                <div class="invalid-feedback">
                    Please enter a password.
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-outline-light btn-lg">
                Sign-In
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                      style="display: none;"></span>
            </button>
        </form>

        <br><br>

        <!-- Footer  -->
        <h4>uname: reishandy, pass: haa?</h4>
        <h4>Copyright &copy Muhammad Akbar Reishandy</h4>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
    // Bootstrap validation
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    // Clear url params
    window.history.replaceState({}, document.title, "login.php");
</script>
</body>
</html>