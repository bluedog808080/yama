<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>JW Player</title>
<!-- <script src="https://jwpsrv.com/library/uHupTOk4EeSdyRJtO5t17w.js"></script> -->
<script src="/tool/jwplayer.js"></script>



</head>
<body>

<!-- 指定變數用 -->
<?php session_start(); ?>
<?php $stream002a = $_POST['stream1'];
      $stream002b = $_POST['stream2'];
      $stream002c = $_POST['stream3'];
	  if($stream002a != '' && $stream002b != '' && $stream002c =='')
		{
			$_SESSION['002a'] = $stream002a;
			$_SESSION['002b'] = $stream002b;
			$_SESSION['002'] = $stream002a.$stream002b;
			unset($_SESSION['002c']);
		}
	  else if($stream002a == '' && $stream002b == '' && $stream002c != '')
		{
			$_SESSION['002c'] = $stream002c;
			$_SESSION['002'] = $stream002c;	
			unset($_SESSION['002a']);
			unset($_SESSION['002b']);}
	  else if($stream002a == ''&& $stream002b ==''&& $stream002c =='' )
		{
			/*unset($_SESSION['002a']);unset($_SESSION['002b']);unset($_SESSION['002c']);unset($_SESSION['002']);*/
			session_unset();
		} 
	  
	  $_width = $_POST['_width'] ; 
	  $_ratio = $_POST['_ratio'] ;
		
		//原始參考用
		/*if($_POST['stream3'] == ''&&$_POST['stream1']==''&&$_POST['stream2'] )
		{unset($_SESSION['002']);} */
		/*if($stream002 != '')
		{$_SESSION['002'] = $stream002;} */
?>

<!-- 輸入變數用 -->
<form name = "form1" method = "post" action = "">
<p>
主機位址:
<input type = "text" name = "stream1" value = "<?php echo $_SESSION['002a']; ?>" size = "40"> 
串流名稱:
<input type = "text" name = "stream2" value = "<?php echo $_SESSION['002b']; ?>" size = "20"> 
<p>
Stream URL:
<input type = "text" name = "stream3" value = "<?php echo $_SESSION['002c']; ?>" size = "65"> 
<p>



比率(16:9):<input type = "text" name = "_ratio" value = "" size = "10"> 
<input type = "submit" name = "submit" value = "Enter" ></p>
</form>

縮放(100%):
<form action="" method="POST">
<select name="<?php $_width ?>" onchange="this.form.submit()">
  <option  value ="100">100%</option>
  <option  value ="50">50%</option>
  <option  value ="30">30%</option>
</select>
</form>


<?php /*<input type = "text" name = "_width" value = "" size = "10"> */?>

<?php /*
<select name = "_width">
  <option  value ="<?php $_width = 100 ?>">100%</option>
  <option  value ="<?php $_width = 50 ?>">50%</option>
  <option  value ="<?php $_width = 30 ?>">30%</option>
  
</select>


<select onChange="location.href='jwplayer2.php?$_width='+this.value">
    <option value="100">100%</option>
    <option selected = "true" value="30">30%</option>
    <option value="50">50%</option>
</select>
*/?>
<?php 

echo '>>>>>';
echo $_width; 
echo '<<<<<';?>

<!-- 顯示當前變數用 -->
<p>
<?php print "目前播放視訊：".$_SESSION['002']." 尺寸：".$_width."%.".$_ratio; ?>
</p>
<hr>

<!-- 產出視訊用 -->
<div id='playermThLQPytwIbV'></div>
<script type='text/javascript'>
    jwplayer('playermThLQPytwIbV').setup({
        file: '<?php if($stream002a == ''&& $stream002b ==''&& $stream002c =='') {echo 'rtmp://edgepccw.bacc888.com/live/sHv286baccf1w';} else {echo $_SESSION['002'];} ?>',
        image: '/icons/akb48.jpg',
        title: 'JWPlayer',
        width: '<?php if($_width == '') {echo '100%';} else {echo $_width.'%';}?>',
        aspectratio: '<?php if($_ratio == '') {echo '16:9';} else {echo $_ratio;}?>',
        autostart: '<?php if($_SESSION['001'] != '') {echo 'true';} else {echo 'false';} ?>'
    });
</script>

</body>
</html>
