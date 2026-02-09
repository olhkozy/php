<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>formularz</title>
    <style>
        @import url('css.css');
    </style>
</head>
<body>
<form action="form.php" method="GET">
<p>Podaj nazwe grzybka</p>
<input name="nazwa"><br>
<p>Podaj kolor czapeczki</p>
<select name='kolor'>
<option value="brązowy"> brązowy</option>
<option value="czerwony z białymi kropkami"> czerwony z białymi kropkami</option>
<option value="żółty"> żółty</option>
<option value="zielonkawy"> zielonkawy</option>
<option value="czerwony"> czerwony </option>
<option value="biało-musztardowy"> biało-musztardowy </option>
<option value="brązowy w cętki"> brązowy w cętki</option>
</select>
<p>Czy grzyb jest jadalny</p>
<input name="jadalny" type="radio" value="1">Tak
<input name="jadalny" type="radio" value="0">Nie<br>
<p>Gdzie rośnie</p>
<select name='lista'>
<?php
    $con = mysqli_connect("localhost", "root", "", "grzyby");
    $q = "SELECT DISTINCT wystepowanie FROM grzyby";
    $result = mysqli_query($con, $q);
    while ($row = $result->fetch_row()) {
        echo ("<option value='" . $row[0] . "'>" . $row[0] . "</option>");
    }
    mysqli_close($con);
?>
</select>
<br><br>
<input type="submit" value="Wyślij formularz">
<input type="reset" value="Wyczyść dane"> <br> 
<br>
<a href="form2.php"> wybierz grzybki </a>
</form>
</body>