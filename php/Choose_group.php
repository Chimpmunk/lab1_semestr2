<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choose group</title>
</head>
<body>
<form method="get" action="group_lessons.php">
<?php
$dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
$smnt = 'SELECT title from groups';
print "<select name='title'>";
foreach ($dbh->query($smnt) as $rows){
    print "<option>$rows[title]</option>";
}
print "</select>";
?>
<input type="submit" value="Ok">
</form>
</body>
</html>