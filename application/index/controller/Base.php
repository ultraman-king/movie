<?php
namespace app\index\controller;
use think\Controller;
use app\common\controller\All;

class Base extends All
{
    var $_group;
    var $_user;

    public function __construct()
    {
        parent::__construct();
        $this->check_site_status();
        $this->label_maccms();
        $this->check_browser_jump();
        $this->label_user();
    }

    public function _empty()
    {
        header("HTTP/1.0 404 Not Found");
        echo  '<script>setTimeout(function (){location.href="'.MAC_PATH.'";},'.(2000).');</script>';
        $msg = lang('page_not_found');
        abort(404,$msg);
        exit;
    }

    protected function check_search($param)
    {
        if($GLOBALS['config']['app']['search'] !='1'){
            echo $this->error(lang('search_close'));
            exit;
        }

        if ( $param['page']==1 && mac_get_time_span("last_searchtime") < $GLOBALS['config']['app']['search_timespan']){
            echo $this->error(lang('search_frequently')."".$GLOBALS['config']['app']['search_timespan']."".lang('seconds'));
            exit;
        }

        // 对IP增加频次限制
        $ip = request()->ip();
        $minute_limit = isset($GLOBALS['config']['app']['search_ip_limit_minute']) ? $GLOBALS['config']['app']['search_ip_limit_minute'] : 30;
        $hour_limit   = isset($GLOBALS['config']['app']['search_ip_limit_hour']) ? $GLOBALS['config']['app']['search_ip_limit_hour'] : 800;
        $day_limit    = isset($GLOBALS['config']['app']['search_ip_limit_day']) ? $GLOBALS['config']['app']['search_ip_limit_day'] : 10000;
        $cache_key = 'check_search:ip:v1:' . $ip;
        // 分钟
        if (!$this->check1MinuteFrequency($cache_key, $minute_limit)) {
            echo $this->error(lang('frequently') . '。可在1分钟后再试。');
            exit;
        }
        $this->increase1MinuteFrequency($cache_key);
        // 小时
        if (!$this->check1HourFrequency($cache_key, $hour_limit)) {
            echo $this->error(lang('frequently') . '。可在1小时后再试。');
            exit;
        }
        $this->increase1HourFrequency($cache_key);
        // 天
        if (!$this->check24HourFrequency($cache_key, $day_limit)) {
            echo $this->error(lang('frequently') . '。可在24小时后再试。');
            exit;
        }
        $this->increase24HourFrequency($cache_key);
    }

    protected function check_site_status()
    {
        //站点关闭中
        if ($GLOBALS['config']['site']['site_status'] == 0) {
            $this->assign('close_tip',$GLOBALS['config']['site']['site_close_tip']);
            echo $this->fetch('public/close');
            die;
        }
    }

    protected function check_browser_jump()
    {
        if (ENTRANCE=='index' && $GLOBALS['config']['app']['browser_junmp'] == 1) {
            $agent = $_SERVER['HTTP_USER_AGENT'];
            if(strpos($agent, 'QQ/')||strpos($agent, 'MicroMessenger')!==false){
                echo $this->fetch('public/browser');
                die;
            }
        }
    }
    protected function check_user_popedom($type_id,$popedom,$param=[],$flag='',$info=[],$trysee=0)
    {
        $user = $GLOBALS['user'];
        $group = $GLOBALS['user']['group'];

        $res = false;
        if(strpos(','.$group['group_type'],','.$type_id.',')!==false && !empty($group['group_popedom'][$type_id][$popedom])!==false){
            $res = true;
        }
        $pre = $flag;
        $col = 'detail';
        if($flag=='play' || $flag=='down'){
            $pre = 'vod';
            $col = $flag;
        }

        if(in_array($pre,['art','vod','actor','website'])){
            $points = $info[$pre.'_points_'.$col];
            if($GLOBALS['config']['user'][$pre.'_points_type']=='1'){
                $points = $info[$pre.'_points'];
            }
        }

        if($GLOBALS['config']['user']['status']==0){

        }
        elseif($popedom==2 && in_array($pre,['art','actor','website'])){

            if($res===false && (empty($group['group_popedom'][$type_id][2]) || $trysee==0)){
                return ['code'=>3001,'msg'=>lang('controller/no_popedom'),'trysee'=>0];
            }
            elseif($group['group_id']<3 && $points>0  ){
                $mid = mac_get_mid($pre);
                $where=[];
                $where['ulog_mid'] = $mid;
                $where['ulog_type'] = 1;
                $where['ulog_rid'] = $param['id'];
                $where['ulog_sid'] = $param['page'];
                $where['ulog_nid'] = 0;
                $where['user_id'] = $user['user_id'];
                $where['ulog_points'] = $points;
                if($GLOBALS['config']['user'][$pre.'_points_type']=='1'){
                    $where['ulog_sid'] = 0;
                }
                $res = model('Ulog')->infoData($where);

                if($res['code'] > 1) {
                    return ['code'=>3003,'msg'=>lang('controller/pay_play_points',[$points]),'points'=>$points,'confirm'=>1,'trysee'=>0];
                }
            }
        }
        elseif($popedom==3){
            if($res===false && (empty($group['group_popedom'][$type_id][5]) || $trysee==0)){
                return ['code'=>3001,'msg'=>lang('controller/no_popedom'),'trysee'=>0];
            }
            elseif($group['group_id']<3 && empty($group['group_popedom'][$type_id][3]) && !empty($group['group_popedom'][$type_id][5]) && $trysee>0){
                return ['code'=>3002,'msg'=>lang('controller/in_try_see'),'trysee'=>$trysee];
            }
            elseif($group['group_id']<3 && $points>0  ){
                $where=[];
                $where['ulog_mid'] = 1;
                $where['ulog_type'] = $flag=='play' ? 4 : 5;
                $where['ulog_rid'] = $param['id'];
                $where['ulog_sid'] = $param['sid'];
                $where['ulog_nid'] = $param['nid'];
                $where['user_id'] = $user['user_id'];
                $where['ulog_points'] = $points;
                if($GLOBALS['config']['user']['vod_points_type']=='1'){
                    $where['ulog_sid'] = 0;
                    $where['ulog_nid'] = 0;
                }
                $res = model('Ulog')->infoData($where);

                if($res['code'] > 1) {
                    return ['code'=>3003,'msg'=>lang('controller/pay_play_points',[$points]),'points'=>$points,'confirm'=>1,'trysee'=>0];
                }
            }
        }
        else{
            if($res===false){
                return ['code'=>1001,'msg'=>lang('controller/no_popedom')];
            }
            if($popedom == 4){
                if( $group['group_id'] ==1 && $points>0){
                    return ['code'=>4001,'msg'=>lang('controller/charge_data'),'trysee'=>0];
                }
                elseif($group['group_id'] ==2 && $points>0){
                    $where=[];
                    $where['ulog_mid'] = 1;
                    $where['ulog_type'] = $flag=='play' ? 4 : 5;
                    $where['ulog_rid'] = $param['id'];
                    $where['ulog_sid'] = $param['sid'];
                    $where['ulog_nid'] = $param['nid'];
                    $where['user_id'] = $user['user_id'];
                    $where['ulog_points'] = $points;
                    if($GLOBALS['config']['user']['vod_points_type']=='1'){
                        $where['ulog_sid'] = 0;
                        $where['ulog_nid'] = 0;
                    }
                    $res = model('Ulog')->infoData($where);

                    if($res['code'] > 1) {
                        return ['code'=>4003,'msg'=>lang('controller/pay_down_points',[$points]),'points'=>$points,'confirm'=>1,'trysee'=>0];
                    }
                }
            }
            elseif($popedom==5){
                if(empty($group['group_popedom'][$type_id][3]) && !empty($group['group_popedom'][$type_id][5])){
                    $where=[];
                    $where['ulog_mid'] = 1;
                    $where['ulog_type'] = $flag=='play' ? 4 : 5;
                    $where['ulog_rid'] = $param['id'];
                    $where['ulog_sid'] = $param['sid'];
                    $where['ulog_nid'] = $param['nid'];
                    $where['user_id'] = $user['user_id'];
                    $where['ulog_points'] = $points;
                    if($GLOBALS['config']['user']['vod_points_type']=='1'){
                        $where['ulog_sid'] = 0;
                        $where['ulog_nid'] = 0;
                    }
                    $res = model('Ulog')->infoData($where);

                    if(2 == 1) {

                    }
                    elseif($points>0 && $res['code'] == 1) {

                    }
                    elseif( $group['group_id'] <=2 && $points <= intval($user['user_points']) ){
                        return ['code'=>5001,'msg'=>lang('controller/try_see_end',[$points, $user['user_points']]),'trysee'=>$trysee];
                    }
                    elseif( $group['group_id'] <3 && $points > intval($user['user_points']) ){
                        return ['code'=>5002,'msg'=>lang('controller/not_enough_points',[$points,$user['user_points'] ]),'trysee'=>$trysee];
                    }
                }
            }
        }

        return ['code'=>1,'msg'=>lang('controller/popedom_ok')];
    }
}