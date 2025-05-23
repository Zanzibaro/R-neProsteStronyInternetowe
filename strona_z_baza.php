<html>

<head>
    <title>Baza</title>
</head>

<body>
    <?php
    $connection = @mysqli_connect('sql312.infinityfree.com', 'if0_37505771', '', 'if0_37505771_baza_danych');

    if (isset($_POST["p1"])) {
        $imie = $_POST["Imie"];
        $nazwisko = $_POST["Nazwisko"];
        $wiek = $_POST["Wiek"];
        $sql = "insert into student (imie, nazwisko, wiek) values('$imie', '$nazwisko', $wiek)";
        $wynik2 = mysqli_query($connection, $sql);
    }
    if (isset($_POST["p2"])) {
        $id = $_POST["id"];
        $sql = "delete from student where id=$id";
        $wynik3 = mysqli_query($connection, $sql);
    }

    $sql = "SELECT * FROM Lab07";
    $wynik = mysqli_query($connection, $sql);



    mysqli_close($connection);
    ?>


    <form action="" method="post">
        <input type="text" name="imie" required>
        <input type="text" name="nazwisko" required>
        <input type="number" name="wiek" required>
        <input type="submit" name="dodaj" value="Dodaj">
    </form>

</body>

</html>