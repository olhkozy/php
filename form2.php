<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css1.css">
</head>

<body>
    <div style="width: 100%;overflow:hidden;position:relative;">
        <div style="float:left; width: 80%" class="left">
            <form action="form2.php" method="GET">
                <p>Podaj kolor czapeczki</p>
                <select name='kolor'>
                    <option value="">Wybierz kolor</option>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "zdalne");
                    $q1 = "SELECT DISTINCT kolor_kapelusza FROM grzyby";
                    $result = mysqli_query($con, $q1);
                    while ($row = $result->fetch_row()) {
                        echo ("<option value='" . $row[0] . "'>" . $row[0] . "</option>");
                    }
                    mysqli_close($con);
                    ?>
                </select>
                <p>Czy grzyb jest jadalny</p>
                <input name="jadalny" type="radio" value="1">Tak
                <input name="jadalny" type="radio" value="0">Nie<br>
                <p>Gdzie rośnie</p>
                <select name='lista'>
                    <option value="">Wybierz gdzie rośnie</option>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "zdalne");
                    $q1 = "SELECT DISTINCT wystepowanie FROM grzyby";
                    $result = mysqli_query($con, $q1);
                    while ($row = $result->fetch_row()) {
                        echo ("<option value='" . $row[0] . "'>" . $row[0] . "</option>");
                    }
                    mysqli_close($con);
                    ?>
                </select><br><br>
                <input type="submit" value="Wyślij formularz">
            </form>
            <br>
            <a href="form1.php"> dodaj grzybka </a>
        </div>
        <div style="float:right;" class="right">
            <?php
            if (!empty($_GET['kolor']) || isset($_GET['jadalny']) || !empty($_GET['lista'])) {
                $con = mysqli_connect("localhost", "root", "", "zdalne");

                $q = "SELECT nazwa FROM grzyby WHERE 1=1";

                if (!empty($_GET['kolor'])) {
                    $k = $_GET['kolor'];
                    $q = $q . " AND kolor_kapelusza='$k'";
                }

                if (isset($_GET['jadalny'])) {
                    $j = $_GET['jadalny'];
                    $q = $q . " AND jadalny='$j'";
                }

                if (!empty($_GET['lista'])) {
                    $w = $_GET['lista'];
                    $q = $q . " AND wystepowanie='$w'";
                }

                $result = mysqli_query($con, $q);
                while ($row = $result->fetch_row()) {
                    echo ($row[0] . "<br>");
                }

                mysqli_close($con);
            }
            ?>
        </div>
    </div>
</body>

</html>