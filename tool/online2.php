<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Flash Online Player</title>
<!-- <script src="https://jwpsrv.com/library/uHupTOk4EeSdyRJtO5t17w.js"></script> -->
<script src="/tool/jwplayer.js"></script>
</head>
<body>

<!-- 指定變數用 -->
<?php session_start(); ?>
<?php 
	  $_SESSION['001'] = "http://record.bacc888.com".$_POST['_desk'].$_POST['_no'].$_POST['_date']."/".$_POST['_game'].".flv" ;
	  $_width = $_POST['_width'] ;
	  $_ratio = $_POST['_ratio'] ;
?>

<!-- 輸入變數用 -->
<form name = "form1" method = "post" action = "">
<p>
Stream Name:
<input type = "text" name = "stream1" value = "<?php echo $_SESSION['001']; ?>" size = "65">
<p>

桌別:
<select name="_desk">
	<option  value =""></option>
	<option  value =":13880/sHv286bacca">百家A</option>
	<option  value =":13880/sHv286baccb">百家B</option>
	<option  value =":13880/sHv286baccc">百家C</option>
	<option  value =":13880/sHv286baccd">百家D</option>
	<option  value =":13880/sHv286bacce">百家E</option>
	<option  value =":13880/sHv286baccf">百家F</option>
	<option  value =":13880/sHv286bacch">百家H</option>
	<option  value =":13880/sHv286bacci">百家I</option>
	<option  value =":13880/sHv286baccj">百家J</option>
	<option  value =":13980/sHv286baccsa">保險A</option>
	<option  value =":13980/sHv286baccsb">保險B</option>
	<option  value =":13980/sHv286fanta">翻攤</option>
	<option  value =":13980/sHv286sicba">骰子</option>
	<option  value =":13980/sHv286roula">輪盤A</option>
	<option  value =":13980/sHv286roulb">輪盤B</option>
	<option  value =":13980/sHv286ndbba">魚蝦蟹</option>
	<option  value =":13980/sHv286lwa">龍虎A</option>
	<option  value =":13980/sHv286lwb">龍虎B</option>
</select>

正牌面:
<select name="_no">
	<option  value ="2/">牌面</option>
	<option  value ="1/">正面</option>
</select>

日期(MMDD):<input type = "text" name = "_date" value = "" size = "4">
局數(0001):<input type = "text" name = "_game" value = "" size = "4">
<input type = "submit" name = "submit" value = "Enter" ></p>
<p>

縮放(100%):
<select name="_width">
  <option  value ="100">100%</option>
  <option  value ="90">90%</option>
  <option  value ="80">80%</option>
  <option  value ="70">70%</option>
  <option  value ="60">60%</option>
  <option  value ="50">50%</option>
</select>

比例:
<select name="_ratio">
  <option  value ="4:3">4:3</option>
  <option  value ="16:9">16:9</option>
  <option  value ="3:2">3:2</option>
  <option  value ="1.85:1">1.85:1(電影比例)</option>
  <option  value ="2.39:1">2.39:1(Panavision)</option>
</select>
</form>

<!-- 顯示當前變數用 -->
<p>
<?php
echo $_SESSION['001']
?>

</p>
<hr>

<!-- 產出視訊用 -->
<div id='playermThLQPytwIbV'></div>
<script type='text/javascript'>
    jwplayer('playermThLQPytwIbV').setup({
        file: '<?php echo $_SESSION['001']; ?>',
        title: 'JWPlayer',
		image: '/icons/ferrari.jpg',
        width: '<?php if($_width == '') {echo '100%';} else {echo $_width.'%';} ?>',
        aspectratio: '<?php if($_ratio == '') {echo '4:3';} else {echo $_ratio;} ?>',
        autostart: '<?php if($_SESSION['001'] != '') {echo 'true';} else {echo 'false';} ?>'
    });
</script>

</body>
</html>
