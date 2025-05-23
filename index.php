<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>

<body>
    <h2>Logowanie</h2>

    <?php
    // Sprawdzenie, czy formularz został przesłany
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Bezpieczne pobieranie danych z formularza
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Prosta weryfikacja
        if ($username === 'admin' && $password === '12345') {
            $_SESSION['loggedin'] = true;
            header(header: "Location: stronaglowna.php");
        } else {
            echo "<p style='color: red;'>Nieprawidłowa nazwa użytkownika lub hasło.</p>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="username">Nazwa użytkownika (admin):</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Hasło (12345):</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Zaloguj</button>
    </form>
</body>

</html>