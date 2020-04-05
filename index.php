<?php
/**
 * 简洁如微风
 * 作者Github：@Gongzhengke
 * 基于 Bootstrap 4 的简约博客主题
 * 
 * @package Breeze 简约博客主题
 * @author Gzk
 * @version 1.0
 * @link https://www.gzk.ink
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <?php while($this->next()): ?>
	<div class="media" style="margin-top:20px;">
	 <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
	  <div class="index-img">
		<a href="<?php $this->permalink() ?>"><img src="<?php echo $this->fields->thumb;?>" class="mr-3" alt="<?php $this->permalink() ?>" ></a>
	  </div>
	 <?php else : ?>
     <?php $thumb = showThumbnail($this); if(!empty($thumb)):?>
      <div class="index-img">
        <a href="<?php $this->permalink() ?>"><img src="<?php echo $thumb;?>" class="mr-3" alt="<?php $this->permalink() ?>" ></a>
      </div>
	<?php endif; ?>
    <?php endif; ?>
		<div class="media-body" style="margin-top: 20px;">
			<h5 class="mt-0"><span class="badge badge-primary"><?php $this->category(',', false); ?></span> &nbsp;<a href="<?php $this->permalink() ?>"><b><?php $this->sticky(); $this->title(18) ?></b></a></h5>
			<div style="font-size:13px;margin-top: -5px;font-weight:blod;"><?php $this->date('F j, Y / H:i'); ?> / <?php get_post_view($this) ?> °C</div>
		
			</div>
	</div>
<?php endwhile; ?>	
	
<center>
<p class="next_article"><?php $this->pageLink('上一页'); ?><?php $this->pageLink('下一页','next'); ?></p>
</center>
	</br>
  </div>
</main>

 <?php $this->need('footer.php'); ?>