<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    $showTagCloud = new Typecho_Widget_Helper_Form_Element_Radio(
        'showTagCloud',
        array(true => _t('是'), false => _t('否')),
        'false',
        _t('显示标签云'),
        _t('')
    );
    $form->addInput($showTagCloud);

    $showAboutMe = new Typecho_Widget_Helper_Form_Element_Radio(
        'showAboutMe',
        array(true => _t('是'), false => _t('否')),
        'false',
        _t('显示关于我'),
        _t('')
    );
    $form->addInput($showAboutMe);

    $showContaceMe = new Typecho_Widget_Helper_Form_Element_Radio(
        'showContaceMe',
        array(true => _t('是'), false => _t('否')),
        'false',
        _t('显示联系我'),
        _t('')
    );
    $form->addInput($showContaceMe);    

    $showNewPost = new Typecho_Widget_Helper_Form_Element_Radio(
        'showNewPost',
        array(true => _t('是'), false => _t('否')),
        'false',
        _t('显示最新文章'),
        _t('')
    );
    $form->addInput($showNewPost); 


    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像图片地址'), _t('在这里输入头像链接,带http:// ,不填则使用主题自带的图片'));
    $form->addInput($avatarUrl);

    $authorInfo = new Typecho_Widget_Helper_Form_Element_Text('authorInfo', NULL, NULL, _t('头像下方简介'), _t('用于头像下方显示的一段文字'));
    $form->addInput($authorInfo);

    $socialQQ = new Typecho_Widget_Helper_Form_Element_Text('socialQQ', NULL, NULL, _t('QQ'), _t('请输入QQ号码'));
    $form->addInput($socialQQ);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text('socialGithub', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($socialGithub);

    $socialTwitter = new Typecho_Widget_Helper_Form_Element_Text('socialTwitter', NULL, NULL, _t('Twitter'), _t('请输入 Twitter 地址'));
    $form->addInput($socialTwitter);

    $mytheme_analytics = new Typecho_Widget_Helper_Form_Element_Textarea('mytheme_analytics', NULL, NULL, _t('站点统计代码'), _t('在这里填入站点统计代码'));
    $form->addInput($mytheme_analytics);

    $mytheme_adsider = new Typecho_Widget_Helper_Form_Element_Textarea('mytheme_adsider', NULL, NULL, _t('侧边栏广告'), _t('在这里填入侧边栏广告代码'));
    $form->addInput($mytheme_adsider);

    $mytheme_adpost = new Typecho_Widget_Helper_Form_Element_Textarea('mytheme_adpost', NULL, NULL, _t('文章页广告'), _t('在这里填入文章页广告代码'));
    $form->addInput($mytheme_adpost);

    $mytheme_rec = new Typecho_Widget_Helper_Form_Element_Textarea('mytheme_rec', NULL, NULL, _t('百度推荐'), _t('在这里填入百度推荐代码'));
    $form->addInput($mytheme_rec);
}

function img_postthemb($thiz,$path){
    $content = $thiz->content;
    $ret = preg_match("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $content, $thumbUrl);
    if($ret === 1 && count($thumbUrl) == 2){
        return $thumbUrl[1];
    }else{
        $i = rand(1,7);
        // return $thiz->options->themeUrl . '/images/thumb/' . $i . '.jpg';
        
        return $path . '/images/thumb/' . $i . '.jpg';
    }
}

