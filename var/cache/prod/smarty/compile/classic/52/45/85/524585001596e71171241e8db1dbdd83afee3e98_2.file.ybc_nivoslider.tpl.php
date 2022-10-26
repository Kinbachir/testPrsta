<?php
/* Smarty version 3.1.43, created on 2022-10-23 19:57:02
  from 'C:\xampp1\htdocs\test\modules\ybc_nivoslider\views\templates\hook\ybc_nivoslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63558e7e30c2c1_92998400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '524585001596e71171241e8db1dbdd83afee3e98' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\test\\modules\\ybc_nivoslider\\views\\templates\\hook\\ybc_nivoslider.tpl',
      1 => 1666551152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63558e7e30c2c1_92998400 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>
<!-- Module ybc_nivoslider -->
    <?php if ((isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)) && $_smarty_tpl->tpl_vars['homeslider_slides']->value) {?>
		<div id="ybc-nivo-slider-wrapper" class="theme-default <?php if ($_smarty_tpl->tpl_vars['hide_caption']->value) {?>hide-caption-on-mobile<?php }?>">
			<div id="ybc-nivo-slider"<?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height')) {?> style="max-height:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
						<a class="ybc-nivo-link" href="<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						  <img data-caption-skin="<?php if ((int)$_smarty_tpl->tpl_vars['slide']->value['button_type']) {?>regular<?php } else { ?>default<?php }?>" 
                          data-slide-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-animate="<?php if ($_smarty_tpl->tpl_vars['slide']->value['caption_animate']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_animate'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>random<?php }?>" 
                          <?php if ($_smarty_tpl->tpl_vars['slide']->value['slide_effect'] != 'random') {?>data-transition="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['slide_effect'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> 
                          data-caption1="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-bg-caption1="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['color1'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption2="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-bg-caption2="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['color3'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption3="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend2'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-bg-caption3="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['color5'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-bg-description="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['color6'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-text-direction="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_text_direction'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-top="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_top'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-left="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_left'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-right="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_right'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
                          data-caption-position="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption_position'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"    
                          src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_IMG_') ? constant('_PS_IMG_') : null))."ybc_nivoslider/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                          style="max-width: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value['max_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
; max-height: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value['max_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;" />						  
                        </a>
                    <?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
            <div id="ybc-nivo-caption-text-hidden">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active'] && ($_smarty_tpl->tpl_vars['slide']->value['description'] || $_smarty_tpl->tpl_vars['slide']->value['button_text'])) {?>
                        <div class="ybc-nivo-description ybc-nivo-description-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['slide']->value['button_text']) {?> 
                            <p class="ybc_button_slider ybc_button_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['id_slide'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <a class="button btn ybc-nivo-button btn-default" href="<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['button_text'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                            </p>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            
            <div id="ybc-nivo-slider-loader">
                <div class="ybc-nivo-slider-loader">
                    <div id="ybc-nivo-slider-loader-img">
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_nivo_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/loading.gif" alt=""/>
                    </div>
                </div>
            </div>
		</div>        
	<?php }?>
<!-- /Module ybc_nivoslider -->
<?php }
}
}
