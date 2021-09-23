<?php
/* Smarty version 3.1.39, created on 2021-09-23 13:06:05
  from 'C:\MAMP\htdocs\IdianOceanShop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c5f9d872371_95254041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '912a3ce1b655dd1903d55dc85570a11fbdece6b7' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\IdianOceanShop\\themes\\classic\\templates\\page.tpl',
      1 => 1632139533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c5f9d872371_95254041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495106278614c5f9d852f61_98870784', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2062300656614c5f9d85ac68_76046728 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1118103246614c5f9d856de6_70575488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062300656614c5f9d85ac68_76046728', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_142682971614c5f9d862966_67788342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2141169619614c5f9d8667e6_72180814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1496134122614c5f9d85eae0_77349779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142682971614c5f9d862966_67788342', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141169619614c5f9d8667e6_72180814', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1564143607614c5f9d86e4f0_52872438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_396543689614c5f9d86a669_92085322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1564143607614c5f9d86e4f0_52872438', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_495106278614c5f9d852f61_98870784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_495106278614c5f9d852f61_98870784',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1118103246614c5f9d856de6_70575488',
  ),
  'page_title' => 
  array (
    0 => 'Block_2062300656614c5f9d85ac68_76046728',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1496134122614c5f9d85eae0_77349779',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_142682971614c5f9d862966_67788342',
  ),
  'page_content' => 
  array (
    0 => 'Block_2141169619614c5f9d8667e6_72180814',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_396543689614c5f9d86a669_92085322',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1564143607614c5f9d86e4f0_52872438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1118103246614c5f9d856de6_70575488', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1496134122614c5f9d85eae0_77349779', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396543689614c5f9d86a669_92085322', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
