<?php
    SESSION_START();

    if ($_SERVER['REQUEST_METHOD'] === "POST") { 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $db_email = "manoj@gmail.com";
        $db_password = "manoj123";

        if ($email == $db_email && $password == $db_password) {
            $_SESSION['auth'] = true;
            header('location: ./welcome.php');
        } else {
            header('location: ./index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="container justify-content-md-center">
        <h1 class="text-center">LOGIN</h1>
        <div class="d-grid gap-2 col-4 mx-auto mb-3">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="d-grid gap-2 col-4 mx-auto mb-3">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="d-grid gap-2 col-1 mx-auto">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>