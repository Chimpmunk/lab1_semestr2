<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add lesson</title>
</head>
<body>
<form method="get" action="add.php">
    <?php
    $dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
    $smnt = 'SELECT teacher.name from teacher';
    print "<select name='teacher'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[name]</option>";
    }
    print "</select>";
    $smnt = 'SELECT DISTINCT auditorium from lesson';
    print "<select name='auditorium'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[auditorium]</option>";
    }
    print "</select>";
    $smnt = 'SELECT title from groups';
    print "<select name='title'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[title]</option>";
    }
    print "</select>";
    $smnt = 'SELECT DISTINCT lesson.type from lesson';
    print "<select name='type'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[type]</option>";
    }
    print "</select>";
    $smnt = 'SELECT DISTINCT lesson.disciple from lesson';
    print "<select name='disciple'>";
    foreach ($dbh->query($smnt) as $rows){
        print "<option>$rows[disciple]</option>";
    }
    print "</select>";
    ?>
    <select name="day">
        <option>Monday</option>
        <option>Tuesday</option>
        <option>Wednesday</option>
        <option>Thursday</option>
        <option>Friday</option>
    </select>
    <select name="number">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
    </select>
    <input type="submit" value="Ok">
</form>
</body>
</html>