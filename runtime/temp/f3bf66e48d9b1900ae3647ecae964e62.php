<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:36:"template/panghu/html/vod/detail.html";i:1597048584;s:65:"/www/wwwroot/47.97.4.172/template/panghu/html/public/include.html";i:1597047704;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/head.html";i:1597130576;s:62:"/www/wwwroot/47.97.4.172/template/panghu/html/public/foot.html";i:1597129946;}*/ ?>
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
    <title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
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
<div class="detailid wp cf">
<!--当前位置-->
<div class="breadcrumbnav">
     <ul class="breadcrumbs cf">
         <li><a href="<?php echo $maccms['path']; ?>">首页</a><span class="mianbaox"></span></li>
		 <li><a href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a><span class="mianbaox"></span></li>
         <li><a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a><span class="mianbaox"></span></li>
         <li CLASS="color"><?php echo $obj['vod_name']; ?>在线点播<?php echo $obj['vod_nmae']; ?>迅雷下载</li>
     </ul>
</div>
<div class="detaildmt l">
    <!-- 图文介绍 -->
    <div class="detailcols cf">
        <div class="detailpic l"><img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>" /></div>
        <div class="detailinfo r">
		     <h1><?php echo $obj['vod_name']; ?></h1>
			 <p><span>◎状态：</span><?php echo mac_default($obj['vod_remarks'],$obj['vod_hits'].'播放'); ?></p>
			 <p><span>◎导演：</span><?php echo mac_url_create($obj['vod_director'],'director'); ?></p>
			 <p class="album-title"><span>◎主演：</span><?php echo mac_url_create($obj['vod_actor'],'actor'); ?></p>
             <p class="hide"><span>◎人气：</span><?php echo $obj['vod_hits']; ?></p>
			 <p><span>◎语言：</span><?php echo $obj['vod_lang']; ?></p>
			 <p class="hide"><span>◎地区：</span><?php echo $obj['vod_area']; ?></p>
			 <p class="hide"><span>◎时间：</span><?php echo date('Y-m-d',$obj['vod_time']); ?></p>
			 <p><span>◎年份：</span><?php echo mac_url_create($obj['vod_year'],'year'); ?></p>
			 <p class="hide"><span>◎类型：</span><?php echo mac_url_create($obj['vod_class'],'class'); ?></p>
			 <div class="button">
			     <a class="down" href="#xiazai">下载</a>
				 <a class="play" href="#bofang">在线播放</a>
			 </div>
        </div>
    </div>
	<div class="uibox">
         <div class="uititle"><h3>剧情介绍</h3></div>
         <div class="tjuqing"><?php echo mac_url_content_img($obj['vod_content']); ?></div>
    </div>
    <?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
    <div>由于版权限制，暂不提资源地址。</div>
    <?php else: ?>
    <!--下载地址-->
    <div class="downxunlei"><a name="xiazai"></a>
        <div class="downtitle cf">
	    <ul id="down">
		    <?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): ?>
			<li <?php if($key==1): ?>class="this"<?php endif; ?>><?php echo $vo['player_info']['show']; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	    </div>
		<div id="downlist">
		<?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): ?>
        <div class="downlist cf" <?php if($key==1): ?>style="display:block"<?php endif; ?>>
             <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
             <p><?php echo $vo2['name']; ?><?php echo $vo2['url']; ?></p>
             <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
    </div>
    <!--在线播放地址-->
    <div class="yunplay"><a  name="bofang"></a>
    <div class="downtitle cf">
	    <ul id="play">
		    <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
			<li <?php if($key==1): ?>class="this"<?php endif; ?>><?php echo $vo['player_info']['show']; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<div id="playlist">
	<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
    <div class="videolist cf" <?php if($key==1): ?>style="display:block"<?php endif; ?>>
        <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
        <a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>" ><?php echo $vo2['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
    </div>
    <?php endif; ?>
    <div class="deandownhelp">
        <p>《<?php echo $obj['vod_name']; ?>》-下载帮助：</p>
		<p>1、本站网盘资源收集自网络，不保证长期有效，喜欢请尽快下载。</p>
		<p>2、磁力链接直接复制到迅雷-百度云盘-115云盘内即可下载。<a style="text-decoration: underline;color: #4662d9;" href="<?php echo mac_url('label/xiazai'); ?>" target="_blank">操作教程</a></p>
		<p>3、所有资源来源网络，与本站无关，如侵犯您的权益，请联系站长QQ<?php echo $maccms['site_qq']; ?>删除资源。</p>
    </div>	
	<div class="bdsharebuttonbox"><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_kaixin001" data-cmd="kaixin001" title="分享到开心网"></a><a href="#" class="bds_mogujie" data-cmd="mogujie" title="分享到蘑菇街"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
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
$(function(){
    $("#down li").click(
        function(){
			$(this).addClass("this").siblings().removeClass("this");
            index = $("#down li").index(this);
            $("#downlist div").eq(index).fadeIn(800).siblings().hide();
        }
    )
}); 
</script>
<div class="ui-box marg" id="pinglun" >
    <div class="ui-title">
        <h3>评论</h3>
    </div>
    <div class="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
</div>
</div>
<div class="detailhot searchrt r borsxo">
    <div style="margin-bottom: 20px;">
     <div><h2 class="titleyc">相关下载</h2></div>
     <div class="loading">        
         <ul>
		     <?php $__TAG__ = '{"num":"10","ids":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
             <li class="loadiul"><span class='loadia1 <?php if($key==1): ?> loadia2<?php elseif(($key==2)): ?> loadia3<?php elseif(($key==3)): ?> loadia4<?php endif; ?>'><?php echo $key; ?></span><a class="loadia detailtj" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><em class="loadiem album-title"><?php if($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></em></li>
		     <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
     </div>
	</div>
    <div>
     <div><h2 class="titleyc">为您推荐</h2></div>
     <div class="loading">        
         <ul>
		     <?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
             <li class="loadiul"><span class='loadia1 <?php if($key==1): ?> loadia2<?php elseif(($key==2)): ?> loadia3<?php elseif(($key==3)): ?> loadia4<?php endif; ?>'><?php echo $key; ?></span><a class="loadia detailtj" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" target="_blank"><?php echo $vo['vod_name']; ?></a><em class="loadiem album-title"><?php if($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></em></li>
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