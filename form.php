<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>wynik</title>
<div>
    <?php
    $con = mysqli_connect("localhost", "root","", "zdalne");
    if (isset($_GET['nazwa']) && isset($_GET['kolor'])) {
        
        $n = $_GET['nazwa'];
        $k = $_GET['kolor'];
        $w = $_GET['lista'];
        $j = 1;
        $q = "INSERT INTO grzyby (nazwa, jadalny, kolor_kapelusza, wystepowanie) 
                VALUES ('$n', '$j', '$k', '$w')";
    mysqli_query($con, $q);
}
    $q1 = "SELECT nazwa, kolor_kapelusza FROM grzyby";
    $result = mysqli_query($con, $q1);
    while($row=$result->fetch_row()){
        echo ($row[0]." ".$row[1]."<br>");
    }
    mysqli_close($con);
?>
<br>
<a href="form1.php"> dodaj kolejnego grzybka! :> </a>
</div>
</body>
</html>