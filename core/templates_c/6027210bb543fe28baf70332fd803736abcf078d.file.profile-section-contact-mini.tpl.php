<?php /* Smarty version Smarty-3.1.8, created on 2013-12-05 00:00:41
         compiled from "./incl/xhtml/default/profile-section-contact-mini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601969052a016893ca177-08174799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6027210bb543fe28baf70332fd803736abcf078d' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact-mini.tpl',
      1 => 1383628115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601969052a016893ca177-08174799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
    'profile' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52a0168980ce25_83870507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a0168980ce25_83870507')) {function content_52a0168980ce25_83870507($_smarty_tpl) {?><div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['address']){?><li><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
</li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>State<br>
				<input id="bsnsstate" name="state"><br>
				County<br>
				<input id="bsnscounty" name="county"><br>
				City<br>
				<input id="bsnscity" name="city"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['zipcode']){?> <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
<?php }?><?php }?></li>
				</ul>
			</div>
			<div>
				<strong>Contact Details</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['manager']&&1==2){?>
				<li><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
</li><?php }?>
				<li><strong>Phone</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
<?php }else{ ?>&mdash;<?php }?></span></li>
				<li><strong>Fax</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
<?php }else{ ?>&mdash;<?php }?></span></li><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']){?>
				<li><strong>Email</strong> <span class="c"><a href="/email/community/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
">Send Message</a></span></li><?php }?>
				</ul>
			</div>
			<p class="clearfix"></p>
		</div><?php }} ?>