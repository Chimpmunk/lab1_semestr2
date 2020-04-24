<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose auditorium</title>
</head>
<body>
<form method="get" action="auditorium_lessons.php">
    <?php
    $dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
    $smnt = 'SELECT DISTINCT auditorium from lesson';
    print "<select name='auditorium'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[auditorium]</option>";
    }
    print "</select>";
    ?>
    <input type="submit" value="Ok">
</form>
</body>
</html>