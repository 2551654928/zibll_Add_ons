<?php
    CSF::createSection($prefix, array(
        'id'    => 'Beautification',
        'title' => '美化组件',
        'icon'  => 'fa fa-fw fa-tachometer',
    ));
//美化相关
        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => 'LOGO',
        'icon'        => 'fa fa-fw fa-flag',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => 'logo扫光',
                'label'   => '开启后网站LOGO会有白色扫光。',
                'id'      => 'logoflash',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '变色logo',
                'label'   => '变色logo。',
                'id'      => 'logobiaose',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => 'logo反色',
                'label'   => 'logo反色。',
                'id'      => 'logofanse',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => 'logo淡绿色阴影',
                'label'   => 'logo淡绿色阴影。',
                'id'      => 'logoyinying',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));
        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '头像',
        'icon'        => 'fa fa-fw fa-user',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '头像呼吸光环和鼠标悬停旋转放大',
                'label'   => '开启后用户头像会有绿色呼吸光环且鼠标悬停会旋转放大。',
                'id'      => 'avatar',
                'default' => false,
                'type'    => 'switcher',
            ),

            )
            ));
        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '字体',
        'icon'        => 'fa fa-fw fa-font',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '网站字体',
                'label'   => '内置漂亮好看字体，但大小为4.54M，请慎重开启，或SEO组件下开启插件静态资源托管。',
                'id'      => 'zibll_Add_ons_zt',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
              'id'         => 'Custom_zt_switcher', // field id
              'type'       => 'switcher',
              'title'      => '自定义字体',
              'default'    => false
            ),
            array(
              'id'         => 'Custom_zt',
              'type'       => 'text',
              'title'      => '字体链接：',
              'dependency' => array( 'Custom_zt_switcher', '==', 'true' ), // check for true/false by field id
              'desc' => '请填写自定义的网站字体链接地址',
            ),
            )
            ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '鼠标',
        'icon'        => 'fa fa-fw fa-mouse-pointer',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '鼠标样式',
                'label'   => '内置的好看鼠标样式。',
                'id'      => 'zibll_Add_ons_shubiao',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
              'id'         => 'Custom_shubiao_switcher', // field id
              'type'       => 'switcher',
              'title'      => '自定义鼠标样式',
              'label'   => '别和上面的混用。',
              'default'    => false
            ),
            array(
              'id'         => 'Custom_shubiao_zhizhen',
              'type'       => 'text',
              'title'      => '鼠标正常指针：',
              'dependency' => array( 'Custom_shubiao_switcher', '==', 'true' ), // check for true/false by field id
              'desc' => '请填写自定义的鼠标指针链接地址',
            ),
            array(
              'id'         => 'Custom_shubiao_lianjiezhizhen',
              'type'       => 'text',
              'title'      => '鼠标链接指针：',
              'dependency' => array( 'Custom_shubiao_switcher', '==', 'true' ), // check for true/false by field id
              'desc' => '请填写自定义的鼠标指针链接地址',
            ),
           array(
                'title'   => '点击彩色粒子掉落',
                'label'   => '点击彩色粒子掉落。',
                'id'      => 'zibll_Add_ons_hook_caiselizidiaoluo',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '点击爆炸',
                'label'   => '点击五彩颜色爆炸。',
                'id'      => 'zibll_Add_ons_baozha',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '点击社会主义核心价值观',
                'label'   => '点击社会主义核心价值观。',
                'id'      => 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '个性化右键菜单',
                'label'   => '个性化右键菜单。',
                'id'      => 'zibll_Add_ons_customyoujian',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
              'id'         => 'Custom_youjian_color',
              'type'       => 'color',
              'title'      => '菜单颜色选择：',
              'dependency' => array( 'zibll_Add_ons_customyoujian', '==', 'true' ), // check for true/false by field id
              'desc' => '默认为：<code>#fe3459</code>',
              'default' => '#FE3459',
            ),
            array(
              'id'     => 'xinzengyoujiancaidan',
              'type'   => 'group',
              'title'  => '新增右键菜单',
              'dependency' => array( 'zibll_Add_ons_customyoujian', '==', 'true' ),
              'fields' => array(
                array(
                  'id'    => 'caidanbiaoti',
                  'type'  => 'text',
                  'title' => '菜单标题：',
                ),
                array(
                  'id'    => 'caidanlianjie',
                  'type'  => 'text',
                  'title' => '菜单链接：',
                ),
                array(
                  'id'    => 'caidanicon',
                  'type'  => 'icon',
                  'title' => '菜单图标：',
                  'desc' => '菜单图标不支持子比主题内置SVG图标的图标',
                ),
              )
            ),
           array(
                'title'   => '鼠标跟随',
                'label'   => '鼠标跟随。',
                'id'      => 'zibll_Add_ons_mouse_cursor',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '文章',
        'icon'        => 'fa fa-fw fa-book',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '文章内随机彩色标签',
                'label'   => '开启后，文章底部的标签将会变为彩色标签。',
                'id'      => 'colorfultag',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '文章图片悬停发光',
                'label'   => '文章内图片鼠标移动到图片外边框自动发光。',
                'id'      => 'post_page_img_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '文章阴影',
                'label'   => '文章内容外边框自动发光。',
                'id'      => 'zibll_Add_ons_article_box_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '评论背景',
                'label'   => '开启后会在评论输入框添加一个背景。',
                'id'      => 'pinglunbeijing',
                'default' => false,
                'type'    => 'switcher',
            ),

            )
            ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '首页',
        'icon'        => 'fa fa-fw fa-indent',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '首页文章列表悬停上浮1',
                'label'   => '首页文章列表悬停上浮，不要和下面的混用。',
                'id'      => 'posts_item',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '首页文章列表悬停上浮2',
                'label'   => '首页文章列表悬停上浮，不要和上面的混用。',
                'id'      => 'posts_item',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '首页文章发布时间隐藏',
                'label'   => '子比隐藏首页列表文章发布时间',
                'id'      => 'zibll_post_public_date',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));

        // CSF::createSection($prefix, array(
        // 'parent'      => 'Beautification',
        // 'title'       => '弹窗',
        // 'icon'        => 'fa fa-fw fa-bell-o',
        // 'description' => '',
        // 'fields'      => array(
        //   array(
        //         'title'   => '外链图片自动保存',
        //         'label'   => '文章被保存时，自动保存外链图片，如果是有其他插件，推荐关闭此项使用插件。',
        //         'id'      => 'zibll_Add_ons_ecp_save_post',
        //         'default' => false,
        //         'type'    => 'switcher',
        //     ),
        //     )
        //     ));

        // CSF::createSection($prefix, array(
        // 'parent'      => 'Beautification',
        // 'title'       => '后台',
        // 'icon'        => 'dashicons dashicons-admin-users',
        // 'description' => '',
        // 'fields'      => array(
        //   array(
        //         'title'   => '外链图片自动保存',
        //         'label'   => '文章被保存时，自动保存外链图片，如果是有其他插件，推荐关闭此项使用插件。',
        //         'id'      => 'zibll_Add_ons_ecp_save_post',
        //         'default' => false,
        //         'type'    => 'switcher',
        //     ),
        //     )
        //     ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '背景',
        'icon'        => 'fa fa-fw fa-picture-o',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '网站背景1',
                'label'   => '网站背景1。',
                'id'      => 'zibll_Add_ons_body_background1',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '网站图片背景2',
                'label'   => '网站图片背景2。',
                'id'      => 'zibll_Add_ons_body_backgroundtu1',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '网站动态背景',
                'label'   => '网站动态背景，夕阳博客同款。',
                'id'      => 'xiyangblogbeijing',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '轻论坛同款动态SVG背景',
                'label'   => '轻论坛同款动态SVG背景。',
                'id'      => 'qingluntanbackground',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '粒子背景',
                'label'   => '粒子背景。',
                'id'      => 'zibll_Add_ons_Snowfall2_js',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '下雪特效1',
                'label'   => '下雪特效1。',
                'id'      => 'zibll_Add_ons_Snowfall1',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '枫叶飘落',
                'label'   => '枫叶飘落。',
                'id'      => 'fengyepiaoluo',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '全站变灰',
                'label'   => '全站变灰。',
                'id'      => 'site_gray',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '樱花特效',
                'label'   => '樱花特效。',
                'id'      => 'zibll_Add_ons_hook_yinghua',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));


        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '顶部',
        'icon'        => 'fa fa-fw fa-header',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '顶部进度条',
                'label'   => '开启后，会在顶部显示一个浏览进度条。',
                'id'      => 'zibll_Add_ons_dingbu_jindutiao',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '导航栏字体粗细',
                'label'   => '开启后，导航栏菜单将会按照下方的设置进行粗细调整，你可以设置得更加醒目，也可以设置得很细🐕。',
                'id'      => 'navbarb',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '粗细',
                'id'      => 'navbarbnum',
                'default' => '400',
                'type'    => 'radio',
                  'options'     => array(
                    '100'     => '100',
                    '200'     => '200',
                    '300'     => '300',
                    '400'     => '400',
                    '500'     => '500',
                    '600'     => '600',
                    '700'     => '700',
                    '800'     => '800',
                    '900'     => '900',
                  ),
                'dependency' => array( 'navbarb', '==', 'true' ),
            ),
           array(
                'title'   => '幻灯片圆角',
                'label'   => '幻灯片上一张/下一张按钮样式优化。',
                'id'      => 'swiper',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => 'FPS显示',
                'label'   => '顶部开启FPS显示。',
                'id'      => 'FPS',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '导航栏皮肤——【环游动漫】',
                'label'   => '导航栏皮肤——【环游动漫】。',
                'id'      => 'FPS',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '网站顶部动态标题',
                'label'   => '网站顶部动态标题（你别走吖 ʕ ᵔᴥᵔ ʔ）（欢迎回来o( ❛ᴗ❛ )o。',
                'id'      => 'biaoti',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '离开显示的标题：',
                'id'      => 'likaibiaoti',
                'default' => '你别走吖 ʕ ᵔᴥᵔ ʔ）',
                'type'    => 'text',
                'dependency' => array( 'biaoti', '==', 'true' ),
            ),
           array(
                'title'   => '返回显示的标题',
                'id'      => 'fanhuibiaoti',
                'default' => '欢迎回来o( ❛ᴗ❛ )o',
                'type'    => 'text',
                'dependency' => array( 'biaoti', '==', 'true' ),
            ),
           array(
                'title'   => '主题导航栏悬停特效简化',
                'label'   => '子比主题导航栏鼠标悬停在上面顶部会有一块颜色，感觉丑的可以通过这个去除。',
                'id'      => 'navxuantingjianhua',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '禁用搜索功能',
                'label'   => '禁用子比主题顶部自带的搜索功能按钮',
                'id'      => 'nosearch',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '底部',
        'icon'        => 'fa fa-fw fa-minus-square-o',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '底部波浪',
                'label'   => '开启后会在网站底部显示海洋波浪。',
                'id'      => 'bolang',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '底部蒲公英',
                'label'   => '开启后会在网站底部显示蒲公英，但仅仅PC端显示。',
                'id'      => 'pugongying',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '底部网站运行时间',
                'label'   => '开启后会在网站底部显示网站运行时间，默认1995-05-29。',
                'id'      => 'wangzhanyunxingshijian_onoff',
                'default' => false,
                'type'    => 'switcher',
            ),
            
           array(
                'title'   => '时间设置',
                'id'      => 'wangzhanyunxingshijian',
                'type'    => 'date',
                'subtitle' => '比如设置：1995-05-29',
                  'settings' => array(
                    'dateFormat'      => 'yy-mm-dd',
                    'changeMonth'     => true,
                    'changeYear'      => true,
                  ),
                'dependency' => array( 'wangzhanyunxingshijian_onoff', '==', 'true' ),
            ),

            )
            ));
            
        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '左侧',
        'icon'        => 'fa fa-fw fa-arrow-left',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '左边联系站长QQ',
                'label'   => '自动获取ID为1的QQ，请在子比主题的用户中心->个人资料中填写QQ号码，不填写不显示。',
                'id'      => 'contact_help_qq',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '随便看看',
                'label'   => '左边显示随便看看按钮(点击跳转随机文章)。',
                'id'      => 'zibll_Add_ons_suibiankankan',
                'default' => false,
                'type'    => 'switcher',
            ),

            )
            ));

        CSF::createSection($prefix, array(
        'parent'      => 'Beautification',
        'title'       => '右侧',
        'icon'        => 'fa fa-fw fa-arrow-right',
        'description' => '',
        'fields'      => array(
           array(
                'title'   => '彩色滚动条',
                'label'   => '开启后右侧滚动条将会变为彩色。',
                'id'      => 'colorfulscrollbar',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '右侧悬浮按钮栏美化',
                'label'   => '右侧悬浮按钮栏美化。',
                'id'      => 'youcexuanfu',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '安全认证',
                'label'   => '页面右下角Myssl安全认证。',
                'id'      => 'zibll_Add_ons_hook_myssl_seal',
                'default' => false,
                'type'    => 'switcher',
            ),
           array(
                'title'   => '调皮猫猫',
                'label'   => '开启右侧显示调皮猫猫。',
                'id'      => 'zibll_Add_ons_hook_duomaomao',
                'default' => false,
                'type'    => 'switcher',
            ),
            )
            ));
//美化相关