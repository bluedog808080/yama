<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>JW Player</title>
<!-- <script src="https://jwpsrv.com/library/uHupTOk4EeSdyRJtO5t17w.js"></script> -->
<script src="/tool/jwplayer.js"></script>
</head>
<body>

<!-- 指定變數用 -->
<?php session_start(); ?>
<?php $stream001a = $_POST['stream1'];
      $stream001b = $_POST['stream2'];
      $stream001c = $_POST['stream3'];
	  if($stream001a != '' && $stream001b != '' && $stream001c =='')
		{
			$_SESSION['001a'] = $stream001a;
			$_SESSION['001b'] = $stream001b;
			$_SESSION['001'] = $stream001a.$stream001b;
			unset($_SESSION['001c']);
		}
	  else if($stream001a == '' && $stream001b == '' && $stream001c != '')
		{
			$_SESSION['001c'] = $stream001c;
			$_SESSION['001'] = $stream001c;	
			unset($_SESSION['001a']);
			unset($_SESSION['001b']);}
	  else if($stream001a == ''&& $stream001b ==''&& $stream001c =='' )
		{
			/*unset($_SESSION['001a']);unset($_SESSION['001b']);unset($_SESSION['001c']);unset($_SESSION['001']);*/
			session_unset();
		} 
	  
	  $_width = $_POST['_width'] ; 
	  $_ratio = $_POST['_ratio'] ;
		
		//原始參考用
		/*if($_POST['stream3'] == ''&&$_POST['stream1']==''&&$_POST['stream2'] )
		{unset($_SESSION['001']);} */
		/*if($stream001 != '')
		{$_SESSION['001'] = $stream001;} */
?>

<!-- 輸入變數用 -->
<form name = "form1" method = "post" action = "">
<p>
主機位址:
<input type = "text" name = "stream1" value = "<?php echo $_SESSION['001a']; ?>" size = "40"> 
串流名稱:
<input type = "text" name = "stream2" value = "<?php echo $_SESSION['001b']; ?>" size = "20">
<p><p>
Stream URL:
<input type = "text" name = "stream3" value = "<?php echo $_SESSION['001c']; ?>" size = "65">
<p>
縮放(100%):<input type = "text" name = "_width" value = "" size = "10"> 
比例(16:9):<input type = "text" name = "_ratio" value = "" size = "10"> 
<input type = "submit" name = "submit" value = "Enter" ></p>
</form>

<!-- 顯示當前變數用 -->
<p>
<?php print "目前播放視訊：".$_SESSION['001']." 尺寸：".$_width."%. 比例：".$_ratio; ?>
</p>
<hr>

<!-- 產出視訊用 -->
<div id='playermThLQPytwIbV'></div>
<script type='text/javascript'>
    jwplayer('playermThLQPytwIbV').setup({
        file: '<?php if($stream001a == ''&& $stream001b ==''&& $stream001c =='') {echo 'rtmp://edgepccw.bacc888.com/live/sHv286baccf1w';} else {echo $_SESSION['001'];} ?>',
        image: '/icons/ferrari.jpg',
        title: 'JWPlayer',
        width: '<?php if($_width == '') {echo '100%';} else {echo $_width.'%';}?>',
        aspectratio: '<?php if($_ratio == '') {echo '16:9';} else {echo $_ratio;}?>',
        autostart: '<?php if($_SESSION['001'] != '') {echo 'true';} else {echo 'false';} ?>'
    });
</script>
<pre>ex1:主機位址=rtmp://edgepccw.bacc888.com/live/        串流名稱=sHv286bacca1w</pre>
<pre>ex2:Stream URL=rtmp://edgepccw.bacc888.com/live/sHv286bacca1w</pre>

</body>
</html>
