<?php
/* Smarty version 3.1.43, created on 2022-10-23 19:57:02
  from 'C:\xampp1\htdocs\test\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63558e7e352262_59844593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f744c6609173a4d93e64c196db6bb008eba0f86' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\test\\themes\\classic\\templates\\index.tpl',
      1 => 1666536879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63558e7e352262_59844593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69073955163558e7e34dfc4_41514969', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_51124201063558e7e34e986_93544468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_103198706763558e7e34ffb5_21425510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_107972836463558e7e34f7f4_92652210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103198706763558e7e34ffb5_21425510', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_69073955163558e7e34dfc4_41514969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_69073955163558e7e34dfc4_41514969',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_51124201063558e7e34e986_93544468',
  ),
  'page_content' => 
  array (
    0 => 'Block_107972836463558e7e34f7f4_92652210',
  ),
  'hook_home' => 
  array (
    0 => 'Block_103198706763558e7e34ffb5_21425510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51124201063558e7e34e986_93544468', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107972836463558e7e34f7f4_92652210', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
