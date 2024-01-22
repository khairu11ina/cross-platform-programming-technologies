<html>
<?php
$file = "";
$link = 0;
if(isset($_GET['link'])){
$link = $_GET['link'];
}
$titles = array("","Викинги","Рыцари","Самураи");
if ($link == 1) { $file = "script_php6_inc1.html"; }
if ($link == 2) { $file = "script_php6_inc2.html"; }
if ($link == 3) { $file = "script_php6_inc3.html"; }
if ($file == "") { ?>
<html>
<head>
<title>Виды воинов</title>
</head>

<h3>Тексты про:</h3>
<a href="script_php6.phtml?link=1">Викинги</a><br>
<a href="script_php6.phtml?link=2">Рыцари</a><br>
<a href="script_php6.phtml?link=3">Самураи</a>
<?php }
else {
?>
<html>
<head>
<title><? echo $titles[$link] ?></title>
</head>

<?
include($file);
$prev = $link - 1;
$next = $link + 1;
if($prev == 0){
echo "<a href=\"script_php6.phtml?link=0\" style=\"padding-left:130px\">К
    оглавлению</a>";
echo "<a href=\"script_php6.phtml?link=".$next."\" style=\"padding-left:30px\">Следующее</a>";
}
else if($next == 4){
echo "<br><a href=\"script_php6.phtml?link=".$prev."\">Предыдущее</a>";
echo "<a href=\"script_php6.phtml?link=0\" style=\"padding-left:30px\">К
оглавлению</a>";
}
else {
echo "<br><a href=\"script_php6.phtml?link=".$prev."\">Предыдущее</a>";
echo "<a href=\"script_php6.phtml?link=0\" style=\"padding-left:30px\">К
оглавлению</a>";
echo "<a href=\"script_php6.phtml?link=".$next."\" style=\"padding-left:30px\">Следующее</a>";
}
}
?>
</body>
</html>
