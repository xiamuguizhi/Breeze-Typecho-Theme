<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
	echo "<h2>欢迎使用Breeze主题！</h2>";
	echo "当前版本：v1.0</br>";
	echo "作者博客：https://www.gzk.ink</br>";
	echo "计算机技术交流群：977313130</br>";
	echo "请尊重主题版权，谢谢！</br>";
	echo "<hr />";
	echo "<h3>设置主题外观</h3>";
	$blognotice = new Typecho_Widget_Helper_Form_Element_Text('blognotice', NULL, NULL, _t('全站公告'), _t('公告将会显示在菜单栏的上方，不填不显示'));
    $form->addInput($blognotice);
    $iconUrl = new Typecho_Widget_Helper_Form_Element_Text('iconUrl', NULL, NULL, _t('站点 Favicon 图标地址'), _t('在这里填入你的 Favicon URL 地址'));
    $form->addInput($iconUrl);
    $dftimgUrl = new Typecho_Widget_Helper_Form_Element_Text('dftimgUrl', NULL,$value='/usr/themes/Breeze/img/dft.jpg', _t('默认缩略图地址'), _t('默认缩略图 URL 地址（推荐大小 164*110）'));
    $form->addInput($dftimgUrl);
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO（推荐大小 75*75）'));
    $form->addInput($logoUrl);
    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, NULL, _t('站点背景颜色'), _t('在这里填入你喜欢的背景颜色，如：#3987df，不填即默认白色（#FFFFFF）'));
    $form->addInput($bgcolor);
    $sqlinks = new Typecho_Widget_Helper_Form_Element_Text('sqlinks', NULL, NULL, _t('链接申请地址（地址必须加协议头）'), _t('可以填写“关于”页面的URL，也可以新建一个专门的页面'));
    $form->addInput($sqlinks);
    $Links = new Typecho_Widget_Helper_Form_Element_Textarea('Links', NULL, NULL, _t('链接列表'), _t('输入格式：<br><strong>名称,地址,描述,头像</strong><br>一行一个，中间是英文逗号，所有信息必须填写'));
	$form->addInput($Links);
    $tongjidm = new Typecho_Widget_Helper_Form_Element_Textarea('tongjidm', NULL, NULL, _t('页脚统计代码'), _t('在文本框内粘贴你的站点的统计代码'));
    $form->addInput($tongjidm);
    $ewaicss = new Typecho_Widget_Helper_Form_Element_Textarea('ewaicss', NULL, NULL, _t('额外自定义CSS'), _t('在这里放置额外自定义的CSS代码'));
    $form->addInput($ewaicss);

}


function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    $rand = rand(1,7); //备用
    $random = $widget->widget('Widget_Options')->dftimgUrl;

$cai = '';
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';



if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    } 
else 
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
else {
$ctu = $random;
}
return $ctu;
}


function get_post_view($archive)
{
$cid = $archive->cid;
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
$db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
echo 0;
return;
}
$row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
if ($archive->is('single')) {
$db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
}
echo $row['views'];
}

function themeInit($archive) {
if ($archive->is('index')) {
$archive->parameter->pageSize = 6;
}
}

function Links($sorts = NULL) {
    $options = Typecho_Widget::widget('Widget_Options');
    $link = NULL;
    if ($options->Links) {
        $list = explode("\r\n", $options->Links);
        foreach ($list as $val) {
            list($name, $url, $description, $headimg) = explode(",", $val);
            $link .= $url ? '<div class="media" style="margin-bottom:15px;"><img src="'.$headimg.'" class="mr-3" height="64" width="64" style="border-radius:50%;"><div class="media-body"><a href="'.$url.'" target="_blank" style="color:black;"><h5 class="mt-0">'.$name.'</h5></a>'.$description.'</div></div>' : ''.$description.''.$name.'';
           
        }
    }
    echo $link ? $link : '暂无链接';
}
