<?php
/* Smarty version 3.1.43, created on 2022-10-23 19:57:02
  from 'C:\xampp1\htdocs\test\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63558e7e18f673_77663630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30ca0e1b224dd013b6725cb83a9137704836f44' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\test\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1666536879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63558e7e18f673_77663630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '201437388763558e7e18ccc9_70874576';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12492761163558e7e18d973_33635355', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_12492761163558e7e18d973_33635355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_12492761163558e7e18d973_33635355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
