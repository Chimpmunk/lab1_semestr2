<?php
$dbh = new PDO('mysql:host=localhost;dbname=iteh2lb1var2', "root", "");
$stmt = $dbh->prepare("INSERT INTO lesson (lesson.ID_Lesson ,lesson.week_day, lesson.lesson_number, lesson.auditorium, lesson.disciple, lesson.type)
 VALUES ((SELECT max(FID_Lesson2) from lesson_groups) +1 , ?, ?, ?, ?, ?) ");
$group = $_GET['title'];
$teacher = $_GET['teacher'];
$aud = $_GET['auditorium'];
$type = $_GET['type'];
$disciple = $_GET['disciple'];
$day = $_GET['day'];
$number = $_GET['number'];
$stmt->execute(array($day, $number, $aud, $disciple, $type));
$stmt = $dbh->prepare("INSERT INTO lesson_groups (FID_Lesson2, FID_Groups)
VALUES ((SELECT MAX(ID_Lesson) from lesson), (SELECT ID_Groups from groups where title = ?)); ");
$stmt->execute(array($group));
$stmt = $dbh->prepare("INSERT INTO lesson_teacher (FID_Teacher, FID_Lesson1)
VALUES ((SELECT ID_Teacher from teacher where name = ?), (SELECT MAX(ID_Lesson) from lesson)); ");
$stmt->execute(array($teacher));
print "Lesson added";
?>