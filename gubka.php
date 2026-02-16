<form>
<p> podaj login</p>
<input type='text' name='login'>
<p>podaj hasło</p>
<input type='text' name='haslo'>
<input type='submit' value='wyslij'>
<input type='reset' value='usun'>
</form>
<?php
if(isset($_GET['login']) && ($_GET['haslo'])){
$con = mysqli_connect('localhost','root','','jozef');
$q = "SELECT u, p from users  WHERE u='".$_GET['login']."' && p='".$_GET['haslo']."'";
if($r=$con->query($q));
$row = $r -> fetch_array();
if (!isset($row)){
    echo ('dane są złe');
}
else {
    echo('dane są GIT');
}
}
?>