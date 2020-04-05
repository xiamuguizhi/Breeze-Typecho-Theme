<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="media" style="margin-top:20px;">
	
	
	<div class="media-body" style="max-width:100%">
			<h5 class="mt-0" style="width: 98%"><span class="badge badge-primary"><?php $this->category(',', false); ?></span> &nbsp;<a href="<?php $this->permalink() ?>"><b><?php $this->title() ?></b></a></h5>
			<div style="font-size:14px;margin-top: -3px;"><?php $this->date('F j, Y / H:i'); ?> / <?php get_post_view($this) ?> °C</div>
			<div class="post">
			<p style="font-size:14px;"><?php $this->content(''); ?></p>
			</div>
			</div>
	</div>

<?php $this->need('comments.php'); ?>
</br>
 </div>
</main>

 <?php $this->need('footer.php'); ?>