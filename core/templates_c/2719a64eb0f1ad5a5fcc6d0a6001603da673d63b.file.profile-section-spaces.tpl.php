<?php /* Smarty version Smarty-3.1.8, created on 2014-01-08 14:43:36
         compiled from "./incl/xhtml/default/frontend/profile-section-spaces.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205340565152cdb878a48755-53756469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2719a64eb0f1ad5a5fcc6d0a6001603da673d63b' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-section-spaces.tpl',
      1 => 1388896232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205340565152cdb878a48755-53756469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
    'space' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52cdb878e83230_39602382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cdb878e83230_39602382')) {function content_52cdb878e83230_39602382($_smarty_tpl) {?><section class="<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']){?>tiled <?php }?>premium-box">
				<header>Spaces available<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']&&!$_smarty_tpl->tpl_vars['page']->value['editmode']){?> (<?php echo $_smarty_tpl->tpl_vars['page']->value['space_count'];?>
)<?php }?></header>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['spaces']){?>
				<div class="p-<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>edit<?php }?>mosaic"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
					<div id="spaceslist"><?php }?>
					<?php  $_smarty_tpl->tpl_vars['space'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['space']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['spaces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['space']->key => $_smarty_tpl->tpl_vars['space']->value){
$_smarty_tpl->tpl_vars['space']->_loop = true;
?>
					<p id="spacebox<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" class="spaceitem"><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><label for="spc<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
">Space #: </label><input type="text" name="spc[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" id="spc<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['space']->value['name'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['space']->value['name']&&$_smarty_tpl->tpl_vars['space']->value['name']!="_"){?><?php echo $_smarty_tpl->tpl_vars['space']->value['name'];?>
<?php }else{ ?><?php echo howwide($_smarty_tpl->tpl_vars['space']->value['shape']);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>"><a id="delete_<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
" class="zocial secondary deletebtn" onclick="$('#spacebox<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
').remove();">X</a><?php }?><span><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']||(($_smarty_tpl->tpl_vars['space']->value['width']==0||$_smarty_tpl->tpl_vars['space']->value['height']==0)&&!$_smarty_tpl->tpl_vars['page']->value['editmode'])){?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><select name="spcsize[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]"><option value="1" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==1){?> selected="selected"<?php }?>>Single</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==2){?> selected="selected"<?php }?>>Double</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['space']->value['shape']==3){?> selected="selected"<?php }?>>Triple</option></select><?php }else{ ?><?php if (!$_smarty_tpl->tpl_vars['space']->value['name']||$_smarty_tpl->tpl_vars['space']->value['name']=="_"){?>&nbsp;<?php }else{ ?><?php echo howwide($_smarty_tpl->tpl_vars['space']->value['shape']);?>
<?php }?><?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><input type="text" name="spcwd[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" style="width:40px;" value="<?php echo $_smarty_tpl->tpl_vars['space']->value['width'];?>
"> &multi; <input type="text" name="spcht[<?php echo $_smarty_tpl->tpl_vars['space']->value['id'];?>
]" style="width:40px;" value="<?php echo $_smarty_tpl->tpl_vars['space']->value['height'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['space']->value['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['space']->value['height'];?>
<?php }?><?php }?></span></p>
					<?php }
if (!$_smarty_tpl->tpl_vars['space']->_loop) {
?>
					<p>Error</p>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
						</div>
						<p id="spaceboxnew">
							<label for="spc_new">Space #: </label>
							<input type="text" id="spc_new" value=""><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['simple_spaces']==1||($_smarty_tpl->tpl_vars['space']->value['width']==0&&$_smarty_tpl->tpl_vars['space']->value['height']==0)){?><select id="spacenewsize" name="spcsize[]"><option value="1">Single</option><option value="2">Double</option><option value="3">Triple</option></select><?php }else{ ?><input type="text" name="spcwd[]" style="width:40px;" value="24"> &multi; <input type="text" name="spcht[]" style="width:40px;" value="48"><?php }?>
						</p>
						<div class="clearfix"></div>
						<div class="cornerbuttons">
							<input type="reset" class="zocial secondary" value="Clear"><input type="button" class="zocial primary" id="newspcbtn" value="Add Space">
						</div>
					<?php }?>
					<div class="clearfix"></div>
				</div>
				<?php }else{ ?>
				<div><h3>No spaces listed. Contact management for current availability.</h3></div>
				<?php }?>
			</section><?php }} ?>