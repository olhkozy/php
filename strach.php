<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border='1'>";
    echo '<tr>';
    $con = new mysqli('localhost','root','','szkola');
    $q = "select column_name from information_schema.columns where table_name='uczniowie' and table_schema='szkola'";
    $q1 = mysqli_query($con,$q);
    while($row=mysqli_fetch_object($q1)){
        echo('<th>'.$row->column_name.'</th>');
    }
    echo '</tr>';
    $q2 = 'select * from uczniowie';
    $result = $con->query($q2);
    $column_count = $result->field_count;
    while($row=$result->fetch_array()){
        for($i=0;$i<$column_count;$i++){
            echo('<td>'.$row[$i].'</td>');
        }
        echo '</tr>';
    }
    echo '</table>';
    echo 'liczba kolumn: '. $column_count;
    mysqli_close($con);
    ?>
</body>
</html>