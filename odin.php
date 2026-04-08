<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('odin.css');
    </style>
</head>
<body>
    <table>
<?php
$con=mysqli_connect("localhost","root", "", "wypieczki");
$query = "SELECT column_name from information_schema.columns where table_name = 'wypieki' and table_schema = 'wypieczki'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    echo "<th>". $row['column_name']. "</th>";
}
    echo "<p> kolwo:". $count. "</p>";
mysqli_close($con);
?>
</table></body></html>
