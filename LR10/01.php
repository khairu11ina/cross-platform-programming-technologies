<html>
<head>
<title></title>
</head>
<body>
<?
$path=GetCWD()."/loadfiles/";
$buf_path=GetCWD()."/buf/";
if(!empty($_POST))
if($_POST['ch'] == 'yes')
{
$file = scandir($buf_path, 1);
copy($buf_path.$file[0], $path.$file[0]);
unlink($buf_path.$file[0]);
}
if(!file_exists($path) or !file_exists($buf_path))
die("<b>Пожалуйста, создайте папку <font color=red>".$path."</font> и папку <font 
color=red>".$buf_path."</font> и <a href=&#63;>повторите попытку загрузить
файл</a>.</b>");
if(empty($_FILES['UserFile']['tmp_name']))
echo "<form method=post enctype=multipart/form-data>Выберите файл: <input 
type=file name=UserFile> <input type=submit value=Отправить> </form>";
else if(!is_uploaded_file($_FILES['UserFile']['tmp_name']))
die("<b><font color=red>Файл не был загружен! Попробуйте <a href=&#63;>повторить 
попытку</a>!</font></b>");
else if(!file_exists($path.basename($_FILES['UserFile']['name'])))
{
if(!copy($_FILES['UserFile']['tmp_name'], $path.$_FILES['UserFile']['name']))
die("<b><font color=red>Файл не был загружен! Попробуйте <a 
href=&#63;>повторить попытку</a>!</font></b>");
else
echo "<center><b>Файл \"<font 
color=red>".$_FILES['UserFile']['name']."\"</font>успешно загружен на 
сервер!</font></b></center>"."<hr>"."Тип файла:<b>".$_FILES['UserFile']['type'].
"</b><br>"."Размер 
файла:<b>".round($_FILES['UserFile']['size']/1024,2)."кб.</b>"."<hr><center><a 
href=&#63;>Загрузить ещё один файл! </a></center>";
}
else if(empty($_POST['ch']))
{
copy($_FILES['UserFile']['tmp_name'], $buf_path.$_FILES['UserFile']['name']);
echo "<left><b>Такой файл уже существует! Перезаписать?</b><br>"."<form 
method=post><input type=radio id=yes name=ch value=yes><label 
for=yes>Да</label><br>".
"<input type=radio id=no name=ch value=no><label for=no>Нет</label><br>".
"<input type=hidden name=file><input type=submit value=Отправить></form>";
}
?>
</body>
</html>
