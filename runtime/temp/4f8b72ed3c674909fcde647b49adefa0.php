<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:34:"template/panghu/html/art/type.html";i:1597129542;s:65:"/www/wwwroot/47.97.4.172/template/panghu/html/public/include.html";i:1597047704;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/head.html";i:1597130576;s:64:"/www/wwwroot/47.97.4.172/template/panghu/html/public/paging.html";i:1596978312;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/foot.html";i:1597129946;}*/ ?>
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
    <title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
    <meta name="description" content="<?php echo $obj['type_des']; ?>" />
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
<body>
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
<div class="breadcrumbnav wp">
     <ul class="breadcrumbs cf">
         <li><a href="<?php echo $maccms['path']; ?>">首页</a><span class="mianbaox"></span></li>
		 <li class="color"><?php echo $obj['type_name']; ?></li>
     </ul>
</div>	
<div class="wp cf">
<div class="art l borsxo">
    <div class="filter_line filter_line_0">
    <span class="filter_label">分类</span>
    <?php $__TAG__ = '{"ids":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
    <a class="filter_item<?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> licurrent<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="cf wenzhang"> 
        <ul class="pianyi">
             <?php $__TAG__ = '{"num":"10","paging":"yes","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
             <li class="haveimg"> 
				 <a href="<?php echo mac_url_art_detail($vo); ?>"><div class="ec-txbj eclazy" data-original="<?php echo mac_url_img($vo['art_pic']); ?>"></div></a>
                 <div class="content">
		             <h3><a class="title" href="<?php echo mac_url_art_detail($vo); ?>"><?php echo $vo['art_name']; ?></a></h3>
                     <p class="abstract"><?php echo $vo['art_blurb']; ?></p>
                     <div class="meta"><a class="nickname" href="<?php echo mac_url_type($vo['type']); ?>"><?php echo $vo['type']['type_name']; ?></a><span>&nbsp;&nbsp;阅读：<?php echo $vo['art_hits']; ?>&nbsp;&nbsp;</span> <span> 发布：<?php echo date('Y-m-d',$vo['art_time']); ?></span> </div>
			     </div>
             </li>
             <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <?php if($__PAGING__['record_total'] > 0): ?>
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a>
    </div>
</div>
<?php else: ?>
<div class="wrap" style="text-align:center">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>
    </div>
</div>
<div class="searchrt r borsxo">
    <div class="sozhuanti">
	    <div><h2 class="titleyc">精品合集</h2></div>
	    <ul class="cf">
			<?php $__TAG__ = '{"num":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="l">
			    <div><a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"><img src="<?php echo mac_url_img($vo['topic_pic']); ?>" alt="<?php echo $obj['topic_name']; ?>" /></a></div>
				<div><p><?php echo $vo['topic_name']; ?></p></div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
    <div>
     <div><h2 class="titleyc">热点影视资讯</h2></div>
     <div class="loading">        
         <ul>
		     <?php $__TAG__ = '{"num":"20","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
             <li class="loadiul"><span class='loadia1 <?php if($key==1): ?> loadia2<?php elseif(($key==2)): ?> loadia3<?php elseif(($key==3)): ?> loadia4<?php endif; ?>'><?php echo $key; ?></span><a class="loadiultxt detailtj album-title" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" target="_blank"><?php echo $vo['art_name']; ?></a><em class="loadiem album-title"><?php echo $vo['art_hits_month']; ?></em></li>
		     <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
     </div>
	</div>
</div>
</div>
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