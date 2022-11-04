<?php
/*
Plugin Name: 子比主题附加组件重构版
Plugin URI: https://www.dift.cn
Description: 子比主题附加组件重构版，深度优化，插件键式美化、增强子比，简单、快速、安全、不改动主题。
Version: 2.0
Author: DIFT <kekc@mail.yinjiangbi.cn>
Author URI: https://www.dift.cn
Date: 2022年11月03日
*/





if (!defined('ABSPATH')) {
    die('-1');
}

$zibll_Add_ons_datas = get_option( 'zibll_Add_ons' );//获取配置信息
$dir = dirname(__FILE__);///www/wwwroot/kekc.cn/wp-content/plugins/zibll_Add_ons
define("zibll_Add_ons_dir","$dir");///www/wwwroot/kekc.cn/wp-content/plugins/zibll_Add_ons
define("zibll_Add_ons_index",$dir."/zibll_Add_ons.php");///www/wwwroot/kekc.cn/wp-content/plugins/zibll_Add_ons/index.php
include_once(zibll_Add_ons_dir."/updatechecker.php");//检查更新
require_once plugin_dir_path(__FILE__) .'inc/codestar-framework/codestar-framework.php';//设置框架
require_once plugin_dir_path(__FILE__) .'inc/csf-framework/classes/zib-csf.class.php';//子比框架
include_once(zibll_Add_ons_dir."/functions.php");//函数
include_once(zibll_Add_ons_dir."/core.php");//核心
require_once plugin_dir_path(__FILE__) .'options/admin/zibll_Add_ons_options.php';//设置项
include_once(zibll_Add_ons_dir."/kekcpost.php");//KEKC最新文章dashboard
include_once(zibll_Add_ons_dir."/ads.php");//广告