<?php /* Smarty version Smarty-3.1.8, created on 2013-12-05 23:40:04
         compiled from "./incl/xhtml/default/profile-section-homes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110596884652a16334923408-97757245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd4af8c914fb154dee5bd1af5dfbf80c2de63c8' => 
    array (
      0 => './incl/xhtml/default/profile-section-homes.tpl',
      1 => 1386100462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110596884652a16334923408-97757245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
    'home' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52a16334ba6366_36198098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a16334ba6366_36198098')) {function content_52a16334ba6366_36198098($_smarty_tpl) {?><section class="h3-list premium-box">
				<header>Homes Available<?php if ($_smarty_tpl->tpl_vars['page']->value['homes']&&!$_smarty_tpl->tpl_vars['page']->value['editmode']){?> (<?php echo $_smarty_tpl->tpl_vars['page']->value['home_count'];?>
)<?php }?></header>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?><a href="<?php echo s('domain');?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/edithomes" class="zocial primary" target="_blank">Manage Listed Homes</a> <?php if ($_smarty_tpl->tpl_vars['page']->value['home_count']==0){?>No homes<?php }elseif($_smarty_tpl->tpl_vars['page']->value['home_count']==1){?>1 home<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['home_count'];?>
 homes<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['page']->value['homes']){?>
					<?php  $_smarty_tpl->tpl_vars['home'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['home']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['homes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['home']->key => $_smarty_tpl->tpl_vars['home']->value){
$_smarty_tpl->tpl_vars['home']->_loop = true;
?>
					<div class="homeh3"><span class="r red">$<?php echo $_smarty_tpl->tpl_vars['home']->value['price'];?>
</span><a href="/home/<?php echo alphaID($_smarty_tpl->tpl_vars['home']->value['id']);?>
"><?php echo $_smarty_tpl->tpl_vars['home']->value['year'];?>
 <?php echo $_smarty_tpl->tpl_vars['home']->value['brand'];?>
</a> - <small><?php echo $_smarty_tpl->tpl_vars['home']->value['width'];?>
&times;<?php echo $_smarty_tpl->tpl_vars['home']->value['length'];?>
</small></div>
					<?php }
if (!$_smarty_tpl->tpl_vars['home']->_loop) {
?>
					<p>Error</p>
					<?php } ?>
				<?php }else{ ?>
					<div><h3>No homes listed</h3></div>
				<?php }?><?php }?>
			</section><?php }} ?>