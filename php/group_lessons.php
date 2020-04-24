<?php
$dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
$stmt = $dbh->prepare("SELECT DISTINCT(l.week_day), l.lesson_number, l.auditorium, l.disciple, l.type 
FROM `lesson` AS l inner JOIN `lesson_groups` AS lg ON l.ID_Lesson = lg.FID_Lesson2 INNER JOIN groups as g on lg.FID_Groups = (select groups.ID_Groups
from groups where groups.title = ?) ");
$group = $_GET['title'];
$stmt->execute(array($group));
print "<table border='1'><tr><caption>Schedule for $group</caption><th>Day</th><th>Lesson number</th><th>Auditorium</th><th>Discipline</th><th>Type</th></tr>";
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