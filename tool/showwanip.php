<table BGCOLOR="#6b8e23" style="text-align: center; width: 170px;" border="1" cellpadding="1" cellspacing="1">
<tbody><tr>
	<td bgcolor="#5f9ea0" td style="vertical-align: top; width: 10px;"><a href="http://opuse.twgg.org/tool/showwanip.php" target="_blank">WAN</a></td>
	<td bgcolor="#ff7f50" td style="vertical-align: top; width: 168px;">
	<?php
if(getenv('HTTP_CLIENT_IP')){
 $onlineip = getenv('HTTP_CLIENT_IP');
}
elseif(getenv('HTTP_X_FORWARDED_FOR')){
 $onlineip = getenv('HTTP_X_FORWARDED_FOR');
}
elseif(getenv('REMOTE_ADDR')){
 $onlineip = getenv('REMOTE_ADDR');
}
else{
 $onlineip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
}
echo $onlineip;
?>
	</td>
</tr></tbody>

