<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
    <div class="blog-sidebar-widget blog-bor">
        <h2 class="blog-text-center blog-title"><span><?php _e('关于我'); ?></span></h2>
        <img src="<?php $this->options->avatarUrl ? $this->options->avatarUrl : $this->options->themeUrl('images/avatar.jpg'); ?>" alt="about me" class="blog-entry-img sidebar-avatar" >
        <p><?php $this->author(); ?></p>
        <p>
            <?php $this->options->authorInfo(); ?>
        </p>
    </div>
    <div class="blog-sidebar-widget blog-bor">
        <h2 class="blog-text-center blog-title"><span><?php _e('联系我'); ?></span></h2>
        <p>
            <?php if ($this->options->socialQQ): ?>
            <a href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <?php endif; ?>
            <?php if ($this->options->socialGithub): ?>
            <a href="<?php $this->options->socialGithub(); ?>"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
            <?php endif; ?>
            <?php if ($this->options->socialWeibo): ?>
            <a href="<?php $this->options->socialWeibo(); ?>"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
            <?php endif; ?>
            <?php if ($this->options->socialTwitter): ?>
            <a href="<?php $this->options->socialTwitter(); ?>"><span class="am-icon-twitter am-icon-fw blog-icon"></span></a>
            <?php endif; ?>
            <a href="<?php $this->options->feedUrl(); ?>"><span class="am-icon-rss am-icon-fw blog-icon"></span></a>
        </p>
    </div>

    <?php if ($this->options->mytheme_adsider):?>
    <!--siderbar ad-->
    <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ads side-ad">
        <?php $this->options->mytheme_adsider() ?>
    </div>
    <?php endif;?>

    <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g side-tag">
        <h2 class="blog-title"><span><?php _e('标签云'); ?></span></h2>
        <div class="am-u-sm-12 blog-clear-padding">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 27))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>" class="blog-tag"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="blog-sidebar-widget blog-bor">
        <h2 class="blog-title"><span><?php _e('最新文章'); ?></span></h2>
        <ul class="am-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
</div>