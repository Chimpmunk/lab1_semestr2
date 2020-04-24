<?php
$dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
$stmt = $dbh->prepare("SELECT DISTINCT l.week_day, l.lesson_number, l.auditorium, l.disciple, l.type 
FROM `lesson` AS l inner JOIN `lesson_teacher` AS lT ON l.ID_Lesson = lT.FID_Lesson1 INNER JOIN teacher as t on lT.FID_Teacher = (select teacher.ID_Teacher
from teacher where teacher.name = ?) ");
$teacher = $_GET['teacher'];
$stmt->execute(array($teacher));
print "<table border='1'><tr><caption>Schedule for $teacher</caption><th>Day</th><th>Lesson number</th><th>Auditorium</th><th>Discipline</th><th>Type</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
<td>$row[week_day]</td>
<td>$row[lesson_number]</td>
<td>$row[auditorium]</td>
<td>$row[disciple]</td>
<td>$row[type]</td>
</tr>";
}
print "</table>";
?>

