<?php
/* Smarty version 3.1.39, created on 2021-09-22 08:59:56
  from 'C:\MAMP\htdocs\IdianOceanShop\admin-dev\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ad46c7231d5_39989681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19f5af3d8846f740d287c772a2e1c8b2d4b8384' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\IdianOceanShop\\admin-dev\\themes\\default\\template\\content.tpl',
      1 => 1632139621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614ad46c7231d5_39989681 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
