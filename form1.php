<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>formularz</title>
</head>
<body>
<form action="form.php" method="GET">
<p>Podaj nazwe grzybka</p>
<input name="nazwa"><br>
<p>Podaj kolor czapeczki</p>
<input name="kolor"><br>
<p>Czy grzyb jest jadalny</p>
<input name="jadalny" type="radio" value="1">Tak
<input name="jadalny" type="radio" value="0">Nie<br>
<p>Gdzie rośnie</p>
<select name='lista'>
<option value='lasy iglaste'>Lasy iglaste</option>
<option value='lasy liściaste'>Lasy liściaste</option>
<option value='lasy mieszane'>Lasy mieszane</option>
<option value='łąki'>Łąki</option>
</select>
<br><br>
<input type="submit" value="Wyślij formularz">
<input type="reset" value="Wyczyść dane"> <br> 
<br>
<a href="form2.php"> wybierz grzybki </a>
</form>
</body>
