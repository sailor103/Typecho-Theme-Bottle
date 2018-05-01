<?php
/**
 * 基于Meizi主题修改版本
 *
 * @package Bottle
 * @author YQC
 * @version 1.0
 * @link https://yqc.im
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>


<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-frame">
    <div id="blog-left" class="am-u-md-8 am-u-sm-12">
        <?php while($this->next()): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <a href="<?php $this->permalink() ?>"> <img src="<?php echo  img_postthemb($this,$this->options->themeUrl)?>" alt="" class="am-u-sm-12"></a>
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                <div class="postInfo">
                  <span><?php $this->date('F j, Y'); ?></span>
                  <span><?php $this->category(','); ?>&nbsp;</span>
                </div>
                <p><?php $this->excerpt(99);?></p>
                <p><a href="<?php $this->permalink() ?>" class="blog-continue">继续阅读 »</a></p>
            </div>
        </article>
        <?php endwhile; ?>
        <?php $this->pageNav('上一页','下一页',4,'...'); ?>
    </div>
    <?php $this->need('sidebar.php'); ?>
</div>
<!-- content end -->

<?php $this->need('footer.php'); ?>
