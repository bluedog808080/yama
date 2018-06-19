<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>JW Player</title>
<!-- <script src="https://jwpsrv.com/library/uHupTOk4EeSdyRJtO5t17w.js"></script> -->
<script src="/tool/jwplayer.js"></script>
</head>
<body>

<?php session_start(); ?>

<!-- 輸入變數用 -->
<form name = "form1" method = "post" action = "">
<p>
Stream URL:
<input type = "text" name = "stream1" value = "" size = "30"> 
<input type = "text" name = "stream2" value = "" size = "30"> 
<p>
Stream URL:
<input type = "text" name = "stream3" value = "<?php echo $_SESSION['001']; ?>" size = "65"> 
<?php $_SESSION['001'] = $stream001 ; echo $_SESSION['001']; ?>
<p>
縮放(100%):<input type = "text" name = "_width" value = "" size = "10"> 
比率(16:9):<input type = "text" name = "_ratio" value = "" size = "10"> 
<input type = "submit" name = "submit" value = "Enter" ></p>
</form>

<!-- 指定變數用 -->
<p>
<?php $stream001 = $_POST['stream1'].$_POST['stream2'].$_POST['stream3']; $_width = $_POST['_width'] ; $_ratio = $_POST['_ratio'] ;
print "目前播放視訊：".$stream001." 尺寸：".$_width."x".$_ratio; ?>
</p>
<hr>

<!-- 產出視訊用 -->
<div id='playermThLQPytwIbV'></div>
<script type='text/javascript'>
    jwplayer('playermThLQPytwIbV').setup({
        file: '<?php if($stream001 == '') {echo 'rtmp://edgepccw.bacc888.com/live/sHv286bacca1w';} else {echo $stream001;} ?>',
        image: '//www.longtailvideo.com/content/images/jw-player/lWMJeVvV-876.jpg',
        title: 'JWPlayer',
        width: '<?php if($_width == '') {echo '100%';} else {echo $_width;}?>',
        aspectratio: '<?php if($_ratio == '') {echo '16:9';} else {echo $_ratio;}?>',
        autostart: 'true'
    });
</script>
<hr>
<div id='playerlfEeqoTzctsO'></div>
<script type='text/javascript'>
    jwplayer('playerlfEeqoTzctsO').setup({
        file: 'http://content.jwplatform.com/videos/HkauGhRi-640.mp4',
        image: '//www.longtailvideo.com/content/images/jw-player/lWMJeVvV-876.jpg',
        title: 'JWPlayer',
        width: '100%',
        aspectratio: '16:9'
    });
</script>
<hr>
<div id='playerGxltfelELbtG'></div>
<script type='text/javascript'>
    jwplayer('playerGxltfelELbtG').setup({
        file: 'http://bbb.bacc1688.com/Skin/default/swf/GDM_Ver1_1_1_1.flv',
        image: '//www.longtailvideo.com/content/images/jw-player/lWMJeVvV-876.jpg',
        title: 'GC+DC',
        width: '100%',
        aspectratio: '16:9'
    });
</script>

</body>
</html>
