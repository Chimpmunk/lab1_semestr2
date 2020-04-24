<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choose teachers</title>
</head>
<body>
<form method="get" action="teacher_lessons.php">
<?php
$dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
$smnt = 'SELECT teacher.name from teacher';
print "<select name='teacher'>";
foreach ($dbh->query($smnt) as $rows){
    print "<option>$rows[name]</option>";
}
print "</select>";
?>
<input type="submit" value="Ok">
</form>
</body>
</html>