<?php /* Smarty version Smarty-3.1.8, created on 2014-01-15 22:08:19
         compiled from "./incl/xhtml/default/frontend/ads-four-square.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43780148152d75b33a61c90-44278358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77288c39bae634b208d74410502963c105e4a942' => 
    array (
      0 => './incl/xhtml/default/frontend/ads-four-square.tpl',
      1 => 1383628110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43780148152d75b33a61c90-44278358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52d75b33c25632_98205853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d75b33c25632_98205853')) {function content_52d75b33c25632_98205853($_smarty_tpl) {?><section id="business-tiles"><?php if ($_smarty_tpl->tpl_vars['page']->value['pragpage']=="state"){?><?php if ((s('usemetros'))==1&&$_smarty_tpl->tpl_vars['page']->value['metrocount']!=0){?><a name="area" id="area_a"></a><?php }else{ ?><a name="counties" id="counties_a"></a><?php }?><?php }?>
<header<?php if ($_smarty_tpl->tpl_vars['page']->value['canvas']['blacknotices']==1){?> class="black"<?php }?>>Sponsored Advertisements</header>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']==0){?><div id="advert-a"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-a"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']==0){?><div id="advert-b"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-b"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']==0){?><div id="advert-c"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-c"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']==0){?><div id="advert-d"><a class="please-add-your-ad-here">Please :3</a></div>
<?php }else{ ?><div id="advert-d"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
" width="0" height="0"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
" width="0" height="0"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['title']!=''){?><?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['title'];?>
<?php }else{ ?>&nbsp;<?php }?></a></div>
<?php }?>
</section>
<style type="text/css">
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][0]['id']!=0){?>
#advert-a a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['image'];?>
) center center no-repeat;
}
#advert-a a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][0]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][1]['id']!=0){?>
#advert-b a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['image'];?>
) center center no-repeat;
}
#advert-b a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][1]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][2]['id']!=0){?>
#advert-c a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['image'];?>
) center center no-repeat;
}
#advert-c a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][2]['hover'];?>
) center center no-repeat;
}<?php }?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['ads'][3]['id']!=0){?>
#advert-d a {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['image'];?>
) center center no-repeat;
}
#advert-d a:hover {
  background: url(<?php echo $_smarty_tpl->tpl_vars['page']->value['ads'][3]['hover'];?>
) center center no-repeat;
}<?php }?>
</style><?php }} ?>