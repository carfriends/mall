<?php
// defined('InShopNC') or exit('Access Invalid!');

$config = array();
$config['base_site_url']        = 'http://www.dwlgou.com';
$config['shop_site_url'] 		= 'http://www.dwlgou.com/shop';
$config['cms_site_url'] 		= 'http://www.dwlgou.com/cms';
$config['microshop_site_url'] 	= 'http://www.dwlgou.com/microshop';
$config['circle_site_url'] 		= 'http://www.dwlgou.com/circle';
$config['admin_site_url'] 		= 'http://www.dwlgou.com/admin';
$config['mobile_site_url'] 		= 'http://www.dwlgou.com/mobile';
$config['wap_site_url'] 		= 'http://www.dwlgou.com/wap';
$config['chat_site_url'] 		= 'http://www.dwlgou.com/chat';
$config['node_site_url'] 		= 'http://:8090';
$config['upload_site_url']		= 'http://www.dwlgou.com/data/upload';
$config['resource_site_url']	= 'http://www.dwlgou.com/data/resource';
$config['version'] 		= '201502020388';
$config['setup_date'] 	= '2015-06-17 18:35:04';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= '33hao_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 's622639db1';
$config['db']['1']['dbpwd']        = 'szxzzz32';
$config['db']['1']['dbname']       = 's622639db1';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '15C0_';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = '33hao';
$config['debug'] 			= false;
$config['default_store_id'] = '1';
//如果开始伪静态，这里设置为true
$config['url_model'] = false;
//如果店铺开启二级域名绑定的，这里填写主域名如baidu.com
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
$config['cache_open'] = false;
$config['delivery_site_url']    = 'http://www.dwlgou.com/delivery';
return $config;