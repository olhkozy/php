<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poczta</title>
    <style>
        @import url(post.css);
    </style>
</head>
<body>
    <header>olha kozyr</header>
    <main>
        <form>
<p> podaj login</p>
<input type='text' name='login'>
<p>podaj hasło</p>
<input type='text' name='haslo'>
<input type='submit' value='wyslij'>
<?php
$con = mysqli_connect('localhost','root','','post');
$q = "SELECT imie, haslobezsha from wiadomosci  WHERE imie='".$_GET['login']."' && haslobezsha='".$_GET['haslo']."'";
if(isset($_GET['login']) && ($_GET['haslo'])){
if($r=$con->query($q));
$row = $r -> fetch_array();
if (!isset($row)){
    echo ('dane są złe').'&nbsp';
}
if(!isset($row)){
    echo('dodajmy użytkownika');
    $q1 = "INSERT INTO `wiadomosci`(`id`, `imie`, `haslobezsha`) VALUES ('','".$_GET['login']."','".$_GET['haslo']."')";
    $con ->query($q1);
}
else{
    echo('dane są GIT');
}
}
?>
</main>
<footer>
    <?php
        if (isset($row)){
    $con = mysqli_connect('localhost','root','','post');
    $q3 = "SELECT imie, haslobezsha from wiadomosci  WHERE imie='".$_GET['login']."' && haslobezsha='".$_GET['haslo']."'";
    $con -> query($q3);
        }
    else {
        echo('niestety sie nie powiodlo');
    }
     ?>
</form>
</footer>
</body>
</html>
