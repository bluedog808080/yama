<!DOCTYPE html>
<html><title>Random Num</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><body>
<h1><font color="green">密碼產生器</font></h1>
<p><b>本產生器</b>可以產出指定位元數之大小寫英文隨機排列的密碼。</p>

<form name = "form1" method = "post" action = "">
<p>密碼長度： <input type="text" name="rancp" value = "6" placeholder="請輸入長度"> 
產生組數： <input type="text" name="loop" value = "4" placeholder="請輸入組數"> 
<button>產出</button></p>
</form>

<?php
$num = $_POST['rancp'];
$loop = $_POST['loop'];
	echo "產出了";echo $loop;echo "組";echo $num;echo "位元數的密碼";echo "<br><br>";
	function randomkeys($length){$pattern = "abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
		for($i=0;$i<$length;$i++){$key .= $pattern{rand(0,35)};}return $key;}
			for ($i=1;$i<=$loop;$i=$i+1)
				{echo randomkeys($num)."<br>";}
?>

</head></body></html>