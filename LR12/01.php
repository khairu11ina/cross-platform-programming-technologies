<html>
<head>
<title>Календарь</title>
</head>
<body>
<?php
$monthdays=date("t");
$year=date("Y");
$daysarray=array("","Пн","Вт","Ср","Чт","Пт","Сб","Вс");
$month =
array("1"=>"Январь","2"=>"Февраль","3"=>"Март","4"=>"
Апрель","5"=>"Май", "6"=>"Июнь",
"7"=>"Июль","8"=>"Август","9"=>"Сентябрь","10"=>"Октя
брь","11"=>"Ноябрь","12"=>"Декабрь");
echo "<font style=\"padding-left:30px;\" color=red><b>".$month[1]."
(".$year.")</b></font>";
for($k = 2; $k <= 4; $k++){
echo "<font style=\"padding-left:120px;\" color=red><b>".$month[$k]."
(".$year.")</b></font>";
}
echo "<br>";
for($h = 0; $h < 12; $h+=4){
for($l = 1 + $h; $l <= 4 + $h; $l++){
$monthdays=date("t", mktime(0, 0, 0, $l, date("d"), date("Y")));
$weeks=$monthdays /7;
$weeks=round($weeks,0);
$dayofmonth=date("j");
$dayofmonthlz=date("d");
$monthlz=date("n");
$numberfirstday = date("w",mktime(0,0,0,$l,1,date("Y")));
if($l % 4 == 0)
echo "<table style =\"padding-left:20px;\" width=\"200\" border=\"0\"
cellspacing=\"0\" cellpadding=\"5\"><tr>\n";
else
echo "<table style =\"float: left; padding-left:20px;\" width=\"200\" border=\"0\"
cellspacing=\"0\" cellpadding=\"5\"><tr>\n";
for ($i = 1; $i <= 7; $i++) {
if($i>5){
echo "<td><font
color=\"#E4723A\">".$daysarray[$i]."</font></td>";
}else{
echo "<td>".$daysarray[$i]."</td>";
}}
echo "</tr><tr>";
$j = 1;
while ($j < $numberfirstday) {
echo "<td>&nbsp;</td>";
$j++;
}
for ($i = 1; $i <= $monthdays; $i++) {
if($i==$dayofmonth && $l == $monthlz){
echo "<td bgcolor=\"#FF8040\"
align=\"center\"><b>".$i."</b></td>";
}else{
echo "<td align=\"center\">".$i."</td>";
}
if (round($j/7)-$j/7==0){
echo "</tr><tr>";
}
$j++;
}
echo "</tr></table>";
if($l == 8)
echo "<br>";
}
echo "<br><br>";
if($h < 8){
echo "<font style=\"padding-left:40px;\" color=red><b>".$month[$h + 5]."
(".$year.")</b></font>";
for($k = $h + 6; $k <= $h + 8; $k++){
echo "<font style=\"padding-left:120px;\" color=red><b>".$month[$k]."
(".$year.")</b></font>";
}
}
echo "<br>";
}
?>
</body>
</html>
