<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Breeze">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="icon" href="<?php $this->options->iconUrl(); ?>">
    <?php $this->header(); ?>
    <?php $this->options->ewaicss(); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('extra/prism.css');?>"> <script src="<?php $this->options->themeUrl('extra/prism.js');?>"></script>
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Favicons -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/usr/themes/Breeze/sticky-footer.css" rel="stylesheet">
    <link href="/usr/themes/Breeze/style.css" rel="stylesheet">
        
    <script type="text/javascript">
(function () {
    window.TypechoComment = {
        dom : function (id) {
            return document.getElementById(id);
        },
    
        create : function (tag, attr) {
            var el = document.createElement(tag);
        
            for (var key in attr) {
                el.setAttribute(key, attr[key]);
            }
        
            return el;
        },

        reply : function (cid, coid) {
            var comment = this.dom(cid), parent = comment.parentNode,
                response = this.dom('respond-post-33'), input = this.dom('comment-parent'),
                form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
                textarea = response.getElementsByTagName('textarea')[0];

            if (null == input) {
                input = this.create('input', {
                    'type' : 'hidden',
                    'name' : 'parent',
                    'id'   : 'comment-parent'
                });

                form.appendChild(input);
            }

            input.setAttribute('value', coid);

            if (null == this.dom('comment-form-place-holder')) {
                var holder = this.create('div', {
                    'id' : 'comment-form-place-holder'
                });

                response.parentNode.insertBefore(holder, response);
            }

            comment.appendChild(response);
            this.dom('cancel-comment-reply-link').style.display = '';

            if (null != textarea && 'text' == textarea.name) {
                textarea.focus();
            }

            return false;
        },

        cancelReply : function () {
            var response = this.dom('respond-post-33'),
            holder = this.dom('comment-form-place-holder'), input = this.dom('comment-parent');

            if (null != input) {
                input.parentNode.removeChild(input);
            }

            if (null == holder) {
                return true;
            }

            this.dom('cancel-comment-reply-link').style.display = 'none';
            holder.parentNode.insertBefore(response, holder);
            return false;
        }
    };
})();
</script>
      <link href="http://libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    
  </head>
  
    <?php if ($this->options->bgcolor): ?>
        <body class="d-flex flex-column h-100" style="background-color:<?php $this->options->bgcolor() ?>">
    <?php else: ?>
        <body class="d-flex flex-column h-100">
  <?php endif; ?>

  	
  	
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
	
    <?php if ($this->options->bgcolor): ?>
        <div class="container" style="background-color:white;margin-top:40px;margin-bottom:20px;border-radius:5px;">
    <?php else: ?>
        <div class="container">
  <?php endif; ?>
  
  	
  	  <div class="media">
  <?php if ($this->options->logoUrl): ?>
   <img src="<?php $this->options->logoUrl() ?>" class="mt-5" width="75" height="75" style="border-radius:50%;margin-left:5px;margin-right:20px;">
   <div class="media-body">
    <h2 class="mt-5"><?php $this->options->title() ?></h2>
    <p class="lead"><?php $this->options->description() ?></p>
	</div>
    <?php else: ?>
   <div class="media-body">
    <h2 class="mt-5"><?php $this->options->title() ?></h2>
    <p class="lead"><?php $this->options->description() ?></p>
	</div>
  <?php endif; ?>
   </div>
  	
<?php if ($this->options->blognotice): ?>
<p style="font-size:13px;margin-top:7px;margin-left:7px;"><b><i class="fa fa-bullhorn"></i>&nbsp; <?php $this->options->blognotice(); ?></b></p>
    <?php else: ?>
  <?php endif; ?>
    
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="<?php $this->options->siteUrl(); ?>"><b><i class="fa fa-home"></i>  首页</b></a>
  </li>
  <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="nav-item"><a class="nav-link" href="{permalink}"><b>{title}</b></a></li>  '); ?>
  
 
</ul>

