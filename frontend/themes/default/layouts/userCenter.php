<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Collapse;
use yii\bootstrap\ButtonDropdown;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\widgets\Menu;
/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/themes/default/layouts/main.php');?>

<div class="ucLeft">
 <div id="firstpane" class="menu_list">

    <p class="menu_head ">我的账户</p>
    <div style="display:none" class=menu_body >
      <a href="index.php?r=site/center&center_id=info">基本信息</a>
      <a href="#">密码修改</a>
    </div>


    <p class="menu_head">贷款管理</p>
    <div style="display:none" class=menu_body >
      <ul>
        <li id="loan"><a href="index.php?r=site/center&center_id=loan">我的贷款</a></li>
      </ul>
    </div>
    <p class="menu_head">理财管理</p>
    <div style="display:none" class=menu_body >
      <ul>
        <li id="invest"><a href="index.php?r=site/center&center_id=invest">我的理财</a></li>
      </ul>
    </div>
    <p class="menu_head ">账户安全</p>
    <div style="display:none" class=menu_body >
      <a href="#">手机绑定</a>
      <a href="#">身份认证</a>
    </div>

 </div>
</div>

    <!--右侧详细页面这里展示-->
    <?= $content ?>
<div style="clear:both"></div>
<?php $this->endContent();?>


