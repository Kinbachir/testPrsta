<?php
/* Smarty version 3.1.43, created on 2022-10-23 19:57:02
  from 'C:\xampp1\htdocs\test\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63558e7e418e14_90450783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8db7db588562ae27ca6f9bf6ebface4be9cb27' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\test\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1666536879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63558e7e418e14_90450783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp1\\htdocs\\test\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\1b\\8d\\b7\\1b8db7db588562ae27ca6f9bf6ebface4be9cb27_2.file.helpers.tpl.php',
    'uid' => '1b8db7db588562ae27ca6f9bf6ebface4be9cb27',
    'call_name' => 'smarty_template_function_renderLogo_32516166763558e7e4109c6_92407920',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_32516166763558e7e4109c6_92407920 */
if (!function_exists('smarty_template_function_renderLogo_32516166763558e7e4109c6_92407920')) {
function smarty_template_function_renderLogo_32516166763558e7e4109c6_92407920(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_32516166763558e7e4109c6_92407920 */
}
