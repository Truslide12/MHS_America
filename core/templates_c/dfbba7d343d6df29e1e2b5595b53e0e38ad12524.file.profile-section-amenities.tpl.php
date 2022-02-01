<?php /* Smarty version Smarty-3.1.8, created on 2013-12-05 23:40:04
         compiled from "./incl/xhtml/default/profile-section-amenities.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76133378352a1633406fe65-13830937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfbba7d343d6df29e1e2b5595b53e0e38ad12524' => 
    array (
      0 => './incl/xhtml/default/profile-section-amenities.tpl',
      1 => 1385838426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76133378352a1633406fe65-13830937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52a163342af621_85305690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a163342af621_85305690')) {function content_52a163342af621_85305690($_smarty_tpl) {?><section class="tiled red">
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
			</section><?php }} ?>