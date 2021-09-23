<?php
/* Smarty version 3.1.39, created on 2021-09-22 15:14:34
  from 'C:\MAMP\htdocs\IdianOceanShop\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b2c3ab34d99_10246465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e94669fb1ee57e0189722f1bc7547c8ba064500' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\IdianOceanShop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1632139533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b2c3ab34d99_10246465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1279092496614b2c3ab30f18_40318965', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_1279092496614b2c3ab30f18_40318965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_1279092496614b2c3ab30f18_40318965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
