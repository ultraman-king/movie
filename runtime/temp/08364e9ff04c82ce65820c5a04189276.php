<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:37:"template/panghu/html/index/index.html";i:1664271522;s:65:"/www/wwwroot/47.97.4.172/template/panghu/html/public/include.html";i:1597047704;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/head.html";i:1597130576;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/foot.html";i:1597129946;}*/ ?>
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
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
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
<div class="swiper-container waptag">
<div class="swiper-wrapper deanselectdiv cf borsxo"> 
   <div class="swiper-slide deansbox deanshot"> 
    <i></i> 
    <ul class="cf"> 
     <li><a href="#" target="_blank">今日最多</a></li> 
     <li><a href="#" target="_blank">本周最多</a></li> 
     <li><a href="#" target="_blank">历史最多</a></li> 
     <li><a href="#" target="_blank">最新上映</a></li> 
    </ul> 
   </div> 
   <div class="swiper-slide deansbox deansarea"> 
    <i></i> 
    <ul class="cf"> 
     <li><a href="#" target="_blank">香港</a></li> 
     <li><a href="#" target="_blank">大陆</a></li> 
     <li><a href="#" target="_blank">美国</a></li> 
     <li><a href="#" target="_blank">韩国</a></li> 
     <li><a href="#" target="_blank">台湾</a></li> 
     <li><a href="#" target="_blank">法国</a></li> 
     <li><a href="#" target="_blank">英国</a></li> 
     <li><a href="#" target="_blank">泰国</a></li> 
    </ul> 
   </div> 
   <div class="swiper-slide deansbox deanstype"> 
    <i></i> 
    <ul class="cf"> 
     <li><a href="#" target="_blank">喜剧</a></li> 
     <li><a href="#" target="_blank">恐怖</a></li> 
     <li><a href="#" target="_blank">爱情</a></li> 
     <li><a href="#" target="_blank">动作</a></li> 
     <li><a href="#" target="_blank">科幻</a></li> 
     <li><a href="#" target="_blank">武侠</a></li> 
     <li><a href="#" target="_blank">战争</a></li> 
     <li><a href="#" target="_blank">犯罪</a></li> 
    </ul> 
   </div> 
   <div class="swiper-slide deansbox deansyear"> 
    <i></i> 
    <ul class="cf"> 
     <li><a href="#" target="_blank">2016</a></li> 
     <li><a href="#" target="_blank">2015</a></li> 
     <li><a href="#" target="_blank">2014</a></li> 
     <li><a href="#" target="_blank">2013</a></li> 
     <li><a href="#" target="_blank">2012</a></li> 
     <li><a href="#" target="_blank">2011</a></li> 
     <li><a href="#" target="_blank">2010</a></li> 
     <li><a href="#" target="_blank">其他</a></li> 
    </ul> 
   </div> 
</div> 
</div>
<div class="wapindextop wp type borsxo jiyong">
<?php $__TAG__ = '{"parent":"current","order":"asc","by":"sort","mid":"1","id":"vo3","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($key % 2 );++$key;?>
<div>
  <div class="headpadtzy">
      <h2 class="title"><?php echo $vo3['type_name']; ?></h2>
      <div class="headhw album-title">
          <?php $__TAG__ = '{"parent":"'.$vo3['type_id'].'","order":"asc","by":"sort","id":"vo4","key":"key4"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key4 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($key4 % 2 );++$key4;?>
          <a class="word" href="<?php echo mac_url_type($vo4,[],'show'); ?>"><?php echo $vo4['type_name']; ?></a>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="gengduo"><a class="more" href="<?php echo mac_url_type($vo3,[],'show'); ?>">更多</a></div>
  </div>
  <div class="modulemod"> 
    <div class="cf listwap"> 
	    <?php $__TAG__ = '{"num":"12","type":"'.$vo3['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <div class="gcol l">
             <div class="packcover">
              <a class="aplusexp" href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><div class="inlist ec-jabj eclazy" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div><span class="packscore"><?php echo $vo['vod_score']; ?>分</span></a>
             </div>
             <div class="infolist">
              <div class="title" style="max-height: 22px;">
               <a class="plusclk" href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
              </div>
              <div class="subtitle album-title">主演：<?php echo $vo['vod_actor']; ?></div>
             </div>
          </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div> 
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<div class="inxlink">
    <div class="title">友情链接 LINK</div>
    <ul class="cf">
	    <li class="l"><a class="themecolor" href="http://www.qymao.cn" target="_blank">企业猫源码网</a></li>
        <li class="l"><a class="themecolor" href="http://www.qymao.cn/cxyuanma/11751.html" target="_blank">模板下载</a></li>
        <?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="l"><a class="themecolor" href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="waplinkbottom"></div>
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