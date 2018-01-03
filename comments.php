<?php 
function threadedComments($comments, $singleCommentOptions)
{      
  $commentClass = '';
  if ($comments->authorId) {
    if ($comments->authorId == $comments->ownerId) {
      $commentClass .= ' comment-by-author';
    } else {
      $commentClass .= ' comment-by-user';
    }
  } 

  $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>
<li id="<?php $comments->theId(); ?>" class="comment<?php
  if ($comments->_levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
  } else {
    echo ' comment-parent';
  }
  $comments->alt(' odd', ' even');
  echo $commentClass;
 //以上部份 不用理会，是判断一些奇偶数评论和作者类的，下面的才是需要修改的，根据需要修改吧， php部份不需要 修改，只需要修改 HTML 部分，下面是我现在用的
?>">
	
	<div class="comment-body">
		<div class="comment-author vcard">
      <?php $comments->gravatar('54', ''); ?>
      <div class="floor">
				<?php if(!$comments->parent) {echo $comments->sequence();echo '#';} ?>
			</div>
			 <?php $singleCommentOptions->beforeAuthor();$comments->author();$singleCommentOptions->afterAuthor(); ?>
		</div>
		<?php $comments->content();?>
		<div class="clear">
		</div>
		<span class="datetime">
			<?php $singleCommentOptions->beforeDate();$comments->date($singleCommentOptions->dateFormat);$singleCommentOptions->afterDate();?>
		</span>
		<span class="reply">
      <?php $comments->reply($singleCommentOptions->replyWord); //输出 回复 链接?>
    </span>
	</div>
  
  
  
  <?php if ($comments->children) { ?>
  <ul class="children">
      <?php $comments->threadedComments($singleCommentOptions); //评论嵌套?>
  </ul>
  <?php } ?>

</li>
<?php
}
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    
    <?php $comments->listComments(array('avatarSize' => 54 )); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    
    
    <div id="<?php $this->respondId(); ?>" class="comment-respond">
      <h3 id="reply-title" class="comment-reply-title"><?php $comments->cancelReply(); ?></h3>
      <form action="<?php $this->commentUrl() ?>" method="post" id="commentform" class="comment-form" role="form">
        
        <?php if($this->user->hasLogin()): ?>
          <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
        <?php else: ?>
        
        <p class="comment-form-author">
          <label for="author">昵称 <span class="required">*</span></label><input id="author" name="author" placeholder="昵称" value="<?php $this->remember('author'); ?>" size="30" required aria-required="true" type="text">
        </p>
        <p class="comment-form-email">
          <label for="mail">邮箱 <span class="required">*</span></label><input id="mail" name="mail" placeholder="邮箱" value="<?php $this->remember('mail'); ?>" size="30" aria-describedby="email-notes" required aria-required="true" type="email">
        </p>
        <p class="comment-form-url">
          <label for="url">网址 </label><input type="url" id="url" name="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" size="30">
        </p>
        
        <?php endif;?>
        
        <p class="comment-form-comment">
          <textarea required="" id="comment" name="text" cols="45" rows="8" aria-required="true"><?php $this->remember('text'); ?></textarea>
        </p>
        
        <p class="form-submit">
          <input name="submit" id="submit" class="submit" value="发表评论" type="submit">
          
        </p>
      </form>
    </div>
    
    
    
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
