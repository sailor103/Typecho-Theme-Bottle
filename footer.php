<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h2>About</h2>
            <p>
                <ul class="footer-ul">
                    <li>Sailor，80末90初的第一代人</li>
                    <li><a href="http://malagis.com" target="_blank" >麻辣GIS</a>站长。</li>
                    <li>现就职于武汉某公司。</li>
                    <li>前端er & GISer</li>
                </ul>
            </p>
            <h2>Contact</h2>
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
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h2>Comments</h2>
            <p>
                <ul class="footer-ul">
                <?php $this->widget('Widget_Comments_Recent','pageSize=9&ignoreAuthor=true')->parse('<li><a href="{permalink}">{text}</a></li>'); ?>
                </ul>
            </p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h2>Links</h2>
            <p>
            <ul class="footer-ul">
                <?php Links_Plugin::output("SHOW_TEXT", 10,"footer"); ?>
            </ul>
            </p>
        </div>
    </div>
    <div class="blog-text-center">© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 &nbsp;<a href="<?php $this->options->siteUrl(); ?>sitemap.xml">网站地图</a></div>
</footer>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="https://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="https://cdn.staticfile.org/amazeui/2.7.2/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="https://cdn.staticfile.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="<?php $this->options->themeUrl('js/jquery.simple-scroll-follow.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/app.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
