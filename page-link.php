<?php 
/**
* 友情链接
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="media" style="margin-top:20px;">
	
	
	<div class="media-body" style="max-width:100%">
	<?php if ($this->options->sqlinks): ?>	
	<h5 class="mt-0">链接<a href="<?php $this->options->sqlinks(); ?>"><button type="button" class="btn btn-outline-primary btn-sm" style="float: right;">申请链接</button></a></h5>
	<?php else: ?>
   <h5 class="mt-0">链接</h5>
  <?php endif; ?>
</br>

<?php Links(); ?>


	</div>
</br>


 </div>
 
</br>
 
</main>

<?php $this->need('footer.php'); ?>