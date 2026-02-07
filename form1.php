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
<p>podaj nazwe grzybka</p>
<input name="nazwa"><br>
<p>podaj kolor czapeczki</p>
<input name="kolor"><br>
<p>gdzie rośnie</p>
<select name='lista'>
<option value='lasy iglaste'>lasy iglaste</option>
<option value='lasy liściaste'>lasy liściaste</option>
<option value='lasy mieszane'>lasy mieszane</option>
<option value='łąki'>łąki</option>
</select>
<br><br>
<input type="submit" value="Wyślij formularz">
<input type="reset" value="Wyczyść dane">
</form>
</body>
