<!DOCTYPE html>
<html><title>Random Num</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><body>

<?php

// 以下程式碼可提供該php簡易密碼保護
$password = 'aa8888';//您的密碼
session_start();
if($_SESSION["admincp_again_2"] != $password){
	if($_POST['admincp_again_1'] != $password){
		echo('<form name="form111" method="post" action="">
			<p>&nbsp;</p>
			<p>Please Enter Password --aa8888-- :
				<input type="password" name="admincp_again_1"> <input type="submit" name="Submit" value="enter">
			</p>
			</form>');
		exit();
		}
	else
	{$_SESSION["admincp_again_2"] = $password;}
}

// echo "\n"; //此行可產生跳行
echo "要產生新的亂數請輕點下方重新產生按鈕。"."<p>";

// 第一種亂數產生
echo "產生八碼，md5字串亂數：".substr(md5(uniqid(rand(), true)),0,8)."<p>";

// 第二種亂數產生
//$random預設為10，更改此數值可以改變亂數的位數
$random=10; //FOR回圈以$random為判斷執行次數
for ($i=1;$i<=$random;$i=$i+1)
{
    $c=rand(1,3);	//亂數$c設定三種亂數資料格式大寫、小寫、數字，隨機產生
    if($c==1){$a=rand(97,122);$b=chr($a);}	//在$c==1的情況下，設定$a亂數取值為97-122之間，並用chr()將數值轉變為對應英文，儲存在$b
    if($c==2){$a=rand(65,90);$b=chr($a);}	//在$c==2的情況下，設定$a亂數取值為65-90之間，並用chr()將數值轉變為對應英文，儲存在$b
    if($c==3){$b=rand(0,9);}				//在$c==3的情況下，設定$b亂數取值為0-9之間的數字
    $randoma=$randoma.$b;					//使用$randoma連接$b
}
echo "產生十碼，迴圈亂數：".$randoma."<p>";					//輸出$randoma每次更新網頁你會發現，亂數重新產生了

// 第三種亂數產生
echo "產生六碼，固定範圍：".rand(000000,999999)."<p>";

// 第四種亂數產生
function randomkeys($length){$pattern = "23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
for($i=0;$i<$length;$i++){$key .= $pattern{rand(0,35)};}return $key;}
echo "產生八碼，指定字串範圍(略過易混淆字元)："."<br>";
	for ($i=1;$i<=10;$i=$i+1)
	echo randomkeys(8)."<br>";
?>

<!-- 第一種刷新按鈕 -->
<input type="button" onclick="dlink()" value="重新產生" />
<script>
function dlink(){document.location.href="randnum.php";}
</script>

<!-- 第二種刷新按鈕 -->
<button onclick="dlink()">重新產生</button>
<script>
function dlink(){document.location.href="";}
</script>

</head></body></html>