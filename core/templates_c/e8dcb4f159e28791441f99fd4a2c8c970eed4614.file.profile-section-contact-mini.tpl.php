<?php /* Smarty version Smarty-3.1.8, created on 2014-01-07 15:28:29
         compiled from "./incl/xhtml/default/frontend/profile-section-contact-mini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147293043852cc717d987368-72268740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8dcb4f159e28791441f99fd4a2c8c970eed4614' => 
    array (
      0 => './incl/xhtml/default/frontend/profile-section-contact-mini.tpl',
      1 => 1388468599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147293043852cc717d987368-72268740',
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
  'unifunc' => 'content_52cc717dac0f03_01542386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc717dac0f03_01542386')) {function content_52cc717dac0f03_01542386($_smarty_tpl) {?><div id="profile-info">
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
				<li><strong>Phone</strong> <span itemprop="telephone" class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
<?php }else{ ?>&mdash;<?php }?></span></li>
				<li><strong>Fax</strong> <span itemprop="fax" class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
<?php }else{ ?>&mdash;<?php }?></span></li><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']){?>
				<li><strong>Email</strong> <span class="c"><a href="/email/community/<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
">Send Message</a></span></li><?php }?>
				</ul>
			</div>
			<p class="clearfix"></p>
		</div><?php }} ?>