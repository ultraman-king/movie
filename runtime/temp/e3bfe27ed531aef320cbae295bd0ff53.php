<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"template/panghu/html/vod/play.html";i:1597131284;s:65:"/www/wwwroot/47.97.4.172/template/panghu/html/public/include.html";i:1597047704;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/head.html";i:1597130576;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/foot.html";i:1597129946;}*/ ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-title" content="<?php echo $maccms['site_name']; ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="email=no" />
	<meta name="theme-color" content="#4662d9" />
	<link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>images/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $maccms['path_tpl']; ?>images/ico/icon57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $maccms['path_tpl']; ?>images/ico/icon114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $maccms['path_tpl']; ?>images/ico/icon152.png" />
    <link rel="icon" sizes="114x114" href="<?php echo $maccms['path_tpl']; ?>images/ico/icon114.png" /> 
    <meta charset="utf-8" />
    <title>在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />
    <link href="https://cdn.bootcss.com/Swiper/4.0.6/css/swiper.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/lazyload.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.style.js"></script>
<script src="https://cdn.bootcss.com/Swiper/4.0.6/js/swiper.min.js"></script>
</head>
<body style="background: #eee;">
<div class="wp head">
    <div class="navtop cf">
	    <div class="logo l"><a href="<?php echo $maccms['path']; ?>" title="<?php echo $maccms['site_name']; ?>">
		<img class="pclogo" src="<?php echo mac_url_img($maccms['site_logo']); ?>" alt="<?php echo $maccms['site_name']; ?>" />
		<img class="waplogo" src="<?php echo $maccms['path_tpl']; ?>images/waplogo.png" alt="<?php echo $maccms['site_name']; ?>" />
		</a></div>
		<div class="sowd r">
            <form id="search" class="cf" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
                <input type="text" name="wd" class="search-input mac_wd l" value="<?php echo $param['wd']; ?>" placeholder="请在此处输入影片名或演员名称" />
                <input type="submit" id="searchbutton"  class="search-button mac_search l" value="搜索影片" />
            </form>
		</div>
        <div class="waphead">
		     <form id="search" class="cf" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
			 <input type="text" class="soinput" name="wd" value="<?php echo $param['wd']; ?>" placeholder="搜索一下" />
			 <input type="submit" id="searchbutton" class="sllogo" />
			 </form>
        </div>
	</div>
	<div class="swiper-container headnav cf borsxo">
	    <ul class="swiper-wrapper">
		     <li class='swiper-slide <?php if($maccms['aid'] == 1): ?>ecnav<?php endif; ?>'><a href="<?php echo $maccms['path']; ?>">首页</a><span class="navbottom"></span></li>
			 <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
             <li class='swiper-slide <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>ecnav<?php endif; ?>'><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a><span class="navbottom"></span></li>
             <?php endforeach; endif; else: echo "" ;endif; ?>
			 <li class="swiper-slide"><a href="<?php echo mac_url('topic/index'); ?>">专题</a></li>
		</ul>
	</div>
</div>
<div class="wapqtop"></div>
<div class="detailid wp cf">
<!--当前位置-->
<div class="breadcrumbnav">
     <ul class="breadcrumbs cf">
        <li class="home"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
        <?php if($obj['type_1']['type_id'] != ''): ?>
        <li><a href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a></li>
        <?php endif; ?>
        <li class="color"><a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a></li>
        <li class="color"><?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线点播</li>
        <li class="back">
            <a href="<?php echo $obj['player_info']['link_pre']; ?>">【上一集】</a>
            <a href="<?php echo $obj['player_info']['link_next']; ?>">【下一集】</a>
        </li>
     </ul>
</div>

<!--播放器-->
<div class="ui-box" id="detail-box">
    <div id="bofang_box">
        <?php echo $player_data; ?>
        <?php echo $player_js; ?>
    </div>
</div>
<div class="playvodlist borsxo">
    <!--在线播放地址-->
    <div class="yunplay">
    <div class="downtitle cf">
	    <ul id="play">
		    <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
			<li <?php if($param['sid'] == $key): ?>class="this"<?php endif; ?>><?php echo $vo['player_info']['show']; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div id="playlist">
	<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
    <div class="videolist cf" <?php if($param['sid'] == $key): ?>style="display:block"<?php endif; ?>>
        <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
        <a class="<?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>playxj<?php endif; ?>" href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>" ><?php echo $vo2['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
    </div>
</div>
<script>
$(function(){
    $("#play li").click(
        function(){
			$(this).addClass("this").siblings().removeClass("this");
            index = $("#play li").index(this);
            $("#playlist div").eq(index).fadeIn(800).siblings().hide();
        }
    )
}); 
</script>
</div>
<div style="height:80px" class="hide"></div>
<span style="display:none" class="mac_ulog_set" alt="设置播放页浏览记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
<script>$(function() {$("div.eclazy").lazyload({effect: "fadeIn"});}); </script>
<div style="display:none"><?php echo $maccms['site_tj']; ?></div>
<div class="footer wp">
   <p class="bottomleft">
       <a href="javascript:addFavorite()">加入收藏</a><span class="fenge">-</span>
	   <a href="<?php echo mac_url('rss/baidu'); ?>" target="_blank">网站地图</a><span class="fenge">-</span>
	   <a href="<?php echo mac_url('gbook/index'); ?>" target="_blank">意见反馈</a><span class="fenge">-</span>
	   <a href="<?php echo mac_url('label/xiazai'); ?>" target="_blank">帮助中心</a>
   </p>
   <p>小鸟影视-最给力的电影网-提供最新电影,最新电视剧,免费电影迅雷下载</p>
   <p>本站资源来自互联网免费共享,仅供交流学习之用,版权归作者本人所有,如果侵犯了您的权益,请通知我们。</p>
</div>
<div class="inxtop">
    <div class="qrcodelayer"><div><i></i></div></div>
	<div class="topdow">
        <div class="tooltip">
	        <div class="text">
			    <div class="downloadtext">扫码下载小鸟APP</div>
		        <div class="fontnorma">小鸟影视&nbsp;&nbsp;想看就看</div>
		    </div>
        </div>
	    <img class="qrcode" src="<?php echo $maccms['path_tpl']; ?>images/appdownload.png" />
	</div>
</div>
</body>
</html>