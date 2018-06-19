<html><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>SRS_FF</title>
</head>
<body>

<!-- 指定變數用 -->
<?php session_start(); ?>
<?php $_stream = $_POST['_stream'] ; 
	$_SESSION['_stream'] = $_POST['_stream'];
?>

<form name = "form1" method = "post" action = "">
<select name="_stream">
  <option  value ="" ></option>
  <option  value ="sHv286baccm1w200" >sHv286baccm1w200</option>
  <option  value ="sHv286baccm1w400" >sHv286baccm1w400</option>
  <option  value ="sHv286baccm1w800" >sHv286baccm1w800</option>
</select>
<input type = "submit" name = "submit" value = "Enter" >
<?php if ($_stream != "") print " 重送視訊：".$_stream; ?>

<?php
$S_command='/opt/scripts/srs-ffmpeg-kill.exp '."'".$_stream."'";
exec($S_command);
// $last_line = system($S_command, $return_var);
// print_r($return_var."<br>");
// print_r($last_line);
?>
</form>

<?php
/*
echo "\nsystem:";
echo $_stream;
$last_line = system('echo $_stream', $return_var);
print_r($return_var);
print_r($last_line);
*/
?>

<?php
/*
echo "\nsystem:";
$S_command='/opt/scripts/hello.sh '."'".$_stream."'";
//$last_line = system('/opt/scripts/hello.sh 1234', $return_var); //$_stream
$last_line = system($S_command, $return_var);
print_r($return_var."<br>");
print_r($last_line);
*/
?>

<?php
/*
echo "\nsystem:";
$last_line = system('df -h', $return_var);
print_r($return_var);
print_r($last_line);
*/
?>

