<?php
/* Smarty version 3.1.43, created on 2022-10-23 19:53:09
  from 'C:\xampp1\htdocs\test\modules\ybc_nivoslider\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63558d95ac31c5_36825317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c31c1e5f2631ba8c446b2b4e94da7c9d8515b74' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\test\\modules\\ybc_nivoslider\\views\\templates\\hook\\iframe.tpl',
      1 => 1666551152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63558d95ac31c5_36825317 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
   function phProductFeedResizeIframe(obj) {
       $('iframe').css('height','auto');
       setTimeout(function() {
           $('iframe').css('opacity',1);
           var pHeight = $(obj).parent().height();
           $(obj).css('height','540px');
       }, 300);
    }
<?php echo '</script'; ?>
> 
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
