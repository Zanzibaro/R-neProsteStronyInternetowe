<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('LOCATION:login.php');
    session_destroy();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Witaj</title>
    <h1>Franciszek Przybyłowski</h1>
</head>

<body>
    <p>Lab 02</p>
    <a href="lab02_tabele.php">Tabele w html</a>
    <a href="lab02_tabele.php">Forms w html</a>
    <p></p>
    <p>Lab 03</p>
    <a href="lab03_tabele.php">Tabele w css</a>
    <a href="lab03_forms.php">Forms w css</a>
    <p></p>
    <p>Lab 04</p>
    <a href="lab04_kalkulator.php">Kalkulator</a>
    <p>Lab 05</p>
    <a href="lab05_regex.php">Forms i regex</a>
</body>

</html>