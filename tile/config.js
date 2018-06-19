var video_width  = 320 ; // 視訊寬度
var video_height = 180 ; // 視訊高度

var vtimeout     = 20  ; // 連線總時間
var timepast     = 5   ; // 影片需要播放時間

// 播放視訊->vtimeout秒內需要播放時間達到timepast秒，否則算異常

var video_list   = 
[
	"rtmp://edgethm.bacc888.com/live/sHv286baccaw" ,
	"rtmp://edgethm.bacc888.com/live/sHv286baccb1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286baccc1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286baccd1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286bacce1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286baccf1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286bacch1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286bacci1w" ,
	"rtmp://edgethm.bacc888.com/live/sHv286baccj1w" , // bacc end
/*
	"rtmp://edgethm.bacc888.com/live/sHv286fanta1w" , // fantan

	"rtmp://edgethm.bacc888.com/live/sHv286roula1w" , // lunpan
	"rtmp://edgethm.bacc888.com/live/sHv286roulb1w" ,
	
	"rtmp://edgethm.bacc888.com/live/sHv286sicba1w" , // shaizi
	
	"rtmp://edgethm.bacc888.com/live/sHv286ndbba1w" , // yuxiaxie
	
	"rtmp://edgethm.bacc888.com/live/sHv286lwa1w" , // longhu
	"rtmp://edgethm.bacc888.com/live/sHv286lwb1w" ,
	
	"rtmp://edgethm.bacc888.com/live/sHv286baccsa1w" , // insubacc
	"rtmp://edgethm.bacc888.com/live/sHv286baccsb1w" ,
	
	"rtmp://phonelive.rgaming11.com/live/phone00" ,
	"rtmp://phonelive.rgaming11.com/live/phone01" ,
	"rtmp://phonelive.rgaming11.com/live/phone02" ,
	"rtmp://phonelive.rgaming11.com/live/phone03" ,
	"rtmp://phonelive.rgaming11.com/live/phone04" ,
	"rtmp://phonelive.rgaming11.com/live/phone05" ,
	"rtmp://phonelive.rgaming11.com/live/phone06" ,
	"rtmp://phonelive.rgaming11.com/live/phone07" ,
	"rtmp://phonelive.rgaming11.com/live/phone08" ,
	"rtmp://phonelive.rgaming11.com/live/phone09" ,
	"rtmp://phonelive.rgaming11.com/live/phone10" ,
	*/
] ;

/**

"rtmp://edgethm.bacc888.com/live/sHv286bacca2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286baccb2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286baccc2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286baccd2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286bacce2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286baccf2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286bacch2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286bacci2w" ,
"rtmp://edgethm.bacc888.com/live/sHv286baccj2w" , // bacc end

"rtmp://edgethm.bacc888.com/live/sHv286fanta2w" , // fantan

"rtmp://edgethm.bacc888.com/live/sHv286roula2w" , // lunpan
"rtmp://edgethm.bacc888.com/live/sHv286roulb2w" ,
	
"rtmp://edgethm.bacc888.com/live/sHv286sicba2w" , // shaizi
	
"rtmp://edgethm.bacc888.com/live/sHv286ndbba2w" , // yuxiaxie
	
"rtmp://edgethm.bacc888.com/live/sHv286lwa2w" , // longhu
"rtmp://edgethm.bacc888.com/live/sHv286lwb2w" ,
	
"rtmp://edgethm.bacc888.com/live/sHv286baccsa2w" , // insubacc
"rtmp://edgethm.bacc888.com/live/sHv286baccsb2w" ,
**/