<?php
function show()
{
?>
<form method="post">
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<td>Первое число: </td><td><input size="14" type="text" name="first"></td>
</tr>
<tr>
<td>Второе число: </td><td><input size="14" type="text" name="second"></td>
</tr>
<tr><td>
<select size="1" name="action">
<option value="sum">Сложить</option>
<option value="min">Вычесть</option>
<option value="umn">Умножить</option>
<option value="del">Разделить</option>
<option value="pow">Возвести в степень</option>
<option value="per">Процент от числа</option>
<option value="sqrt">Квадратный корень</option>
<option value="sin">Синус</option>
<option value="cos">Косинус</option>
<option value="tan">Тангенс</option>
<option value="ctg">Котангенс</option>
</select></td>
<td><input type="submit" value="Выполнить">
</td></tr>
<?php
}
function calc()
{
global $action, $result, $first, $second;
if(!empty($_POST))
{
$action = $_POST['action'];
$first = $_POST['first'];
$second = $_POST['second'];
}
switch($action)
{
case "sum":
$result = $first+$second;
break;
case "min":
$result = $first-$second;
break;
case "umn":
$result = $first*$second;
break;
case "del":
if (!$second)
{
exit("Второе число не введено или равно нулю
<br> <a href=calculator.php>Назад</a>");
}
$result=$first/$second;
break;
case "pow":
$result = pow($first, $second);
break;
case "per":
$result = ($second / $first) * 100;
break;
case "sqrt":
$result = pow($first, 0.5);
break;
case "sin":
$result = sin(deg2rad($first));
break;
case "cos":
$result = cos(deg2rad($first));
break;
case "tan":
$result = tan(deg2rad($first));
break;
case "ctg":
$result = 1/tan(deg2rad($first));
break;
}}
show();
calc();
?>
<tr><td>Результат:</td><td>
<div align="center">
<?php
echo "$result";
?>
</div>
</td></tr>
</table>
</form>
