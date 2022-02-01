<?php /* Smarty version Smarty-3.1.8, created on 2014-01-08 14:43:36
         compiled from "./incl/xhtml/default/frontend/profile-section-amenities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73949283652cdb87885d3a0-91507279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56754cb6eada24ee2b76d0e3c69ab3e41c1848b0' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-section-amenities.tpl',
      1 => 1388817820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73949283652cdb87885d3a0-91507279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52cdb878a3e631_39070521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cdb878a3e631_39070521')) {function content_52cdb878a3e631_39070521($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['none']==0||$_smarty_tpl->tpl_vars['page']->value['editmode']){?><section class="tiled red">
				<header>Community Amenities</header>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<input type="hidden" name="data[pool]" value="0">
				<input type="hidden" name="data[clubhouse]" value="0">
				<input type="hidden" name="data[laundry]" value="0">
				<input type="hidden" name="data[playground]" value="0">
				<input type="hidden" name="data[basketball]" value="0">
				<div class="editboxes">
				<input type="checkbox" id="pool" name="data[pool]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pool']==1){?> checked<?php }?> value="1"><label class="chk" for="pool"> Pool</label>
				<input type="checkbox" id="clubhouse" name="data[clubhouse]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rec']==1){?> checked<?php }?> value="1"><label class="chk" for="clubhouse"> Clubhouse</label>
				<input type="checkbox" id="laundry" name="data[laundry]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['laundry']==1){?> checked<?php }?> value="1"><label class="chk" for="laundry"> Laundry</label>
				<input type="checkbox" id="playground" name="data[playground]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['playground']==1){?> checked<?php }?> value="1"><label class="chk" for="playground"> Playground</label>
				<input type="checkbox" id="basketball" name="data[basketball]"<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['basketball']==1){?> checked<?php }?> value="1"><label class="chk" for="basketball"> Basketball</label>
				</div>
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['pool']==1){?><div class="info-tile dbl-tile">Pool</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['rec']==1){?><div class="info-tile dbl-tile">Clubhouse</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['laundry']==1){?><div class="info-tile dbl-tile">Laundry</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['playground']==1){?><div class="info-tile dbl-tile">Playground</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['basketball']==1){?><div class="info-tile dbl-tile">Basketball</div><?php }?>
			<?php }?>
				<div class="clearfix"></div>
			</section><?php }?><?php }} ?>