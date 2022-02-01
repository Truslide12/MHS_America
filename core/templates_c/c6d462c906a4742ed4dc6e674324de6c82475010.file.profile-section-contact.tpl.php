<?php /* Smarty version Smarty-3.1.8, created on 2013-12-05 23:40:03
         compiled from "./incl/xhtml/default/profile-section-contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34288179852a1633345c3e9-19285717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d462c906a4742ed4dc6e674324de6c82475010' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
    'e730628291f51922737aee96c7ede4362328b3dd' => 
    array (
      0 => './incl/xhtml/default/profile-section-contact-edithours.tpl',
      1 => 1383628116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34288179852a1633345c3e9-19285717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
    'trange' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52a1633401f608_73445342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a1633401f608_73445342')) {function content_52a1633401f608_73445342($_smarty_tpl) {?><div id="profile-info">
			<div>
				<strong>Address</strong>
				<ul>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['address']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?><li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Street Address<br><input type="text" name="data[address]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['address'];?>
<?php }?></li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				State<br><input id="bsnsstate" name="state"><br>
				County<br><input id="bsnscounty" name="county"><br>
				City<br><input id="bsnscity" name="city"><br>
				Postal Code<br><input type="text" name="data[zipcode]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
"><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['city']['title'];?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['page']->value['state']['abbr']);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['data']['zipcode']){?> <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['zipcode'];?>
<?php }?><?php }?></li>
				</ul>
			</div>
			<div<?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?> style="width:344px;"<?php }?>>
				<strong>Office Hours</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>
					<?php /*  Call merged included template "profile-section-contact-edithours.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("profile-section-contact-edithours.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '34288179852a1633345c3e9-19285717');
content_52a16333676d60_09615524($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "profile-section-contact-edithours.tpl" */?>
				<?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['hourspresent']){?><?php  $_smarty_tpl->tpl_vars['trange'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trange']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profile']['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trange']->key => $_smarty_tpl->tpl_vars['trange']->value){
$_smarty_tpl->tpl_vars['trange']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['trange']->value['start']!=7){?>				<li><strong><?php if ($_smarty_tpl->tpl_vars['trange']->value['end']==0){?><?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>
<?php }?></strong> <span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></span></li>
<?php }?><?php } ?><?php }else{ ?><span style="font-style:italic;">No office hours available</span><?php }?>
<?php }?>
				</ul>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['page']->value['editmode']){?><div class="header-carry">
				<strong>&nbsp;</strong>
				<ul>
<?php if ($_smarty_tpl->tpl_vars['page']->value['hourspresent']){?><?php  $_smarty_tpl->tpl_vars['trange'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trange']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['profile']['hours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trange']->key => $_smarty_tpl->tpl_vars['trange']->value){
$_smarty_tpl->tpl_vars['trange']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['trange']->value['start']==7){?>				<li><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['longdays'][$_smarty_tpl->tpl_vars['trange']->value['start']];?>
<?php if ($_smarty_tpl->tpl_vars['trange']->value['end']){?> - <?php echo $_smarty_tpl->tpl_vars['page']->value['shortdays'][$_smarty_tpl->tpl_vars['trange']->value['end']];?>
<?php }?></strong> <span><?php if ($_smarty_tpl->tpl_vars['trange']->value['time']==0){?>Closed<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['trange']->value['time'];?>
 - <?php echo $_smarty_tpl->tpl_vars['trange']->value['endtime'];?>
<?php }?></span></li>
<?php }?><?php } ?><?php }?>
				<li>&nbsp;</li>
				</ul>
			</div><?php }?>
			<div>
				<strong>Contact Details</strong>
				<ul><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['manager']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Manager Name<br><input type="text" name="manager" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
"><?php }else{ ?>Mgr. <?php echo $_smarty_tpl->tpl_vars['page']->value['data']['manager'];?>
<?php }?></li><?php }?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Phone<br><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
"><?php }else{ ?><strong>Phone</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['phone']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['phone'];?>
<?php }else{ ?>&mdash;<?php }?></span><?php }?></li>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Fax<br><input type="text" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
"><?php }else{ ?><strong>Fax</strong> <span class="c"><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['fax']){?><?php echo $_smarty_tpl->tpl_vars['page']->value['data']['fax'];?>
<?php }else{ ?>&mdash;<?php }?></span><?php }?></li><?php if ($_smarty_tpl->tpl_vars['page']->value['data']['email']||$_smarty_tpl->tpl_vars['page']->value['editmode']){?>
				<li><?php if ($_smarty_tpl->tpl_vars['page']->value['editmode']){?>Email<br><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['data']['email'];?>
"><?php }else{ ?><strong>Email</strong> <span class="c"><a href="/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['prof_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['profile']['username'];?>
/email">Send Message</a></span><?php }?></li><?php }?>
				</ul>
			</div>
			<p class="clearfix"></p>
		</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2013-12-05 23:40:03
         compiled from "./incl/xhtml/default/profile-section-contact-edithours.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52a16333676d60_09615524')) {function content_52a16333676d60_09615524($_smarty_tpl) {?><span class="week"><input type="checkbox" name="daysopen[1]" id="openmonday" checked><label class="chk" for="openmonday"></label> Monday</span>
					<span id="hoursmonday"><select name="hoursfrom[1]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[1]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedmonday" style="display:none;">CLOSED</span>
					<!-- Tuesday -->
					<span class="week"><input type="checkbox" name="daysopen[2]" id="opentuesday" checked><label class="chk" for="opentuesday"></label> Tuesday</span>
					<span id="hourstuesday"><select name="hoursfrom[2]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[2]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedtuesday" style="display:none;">CLOSED</span>
					 <!-- Wednesday -->
					<span class="week"><input type="checkbox" name="daysopen[3]" id="openwednesday" checked><label class="chk" for="openwednesday"></label> Wednesday</span>
					<span id="hourswednesday"><select name="hoursfrom[3]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[3]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedwednesday" style="display:none;">CLOSED</span>
					 <!-- Thursday -->
					<span class="week"><input type="checkbox" name="daysopen[4]" id="openthursday" checked><label class="chk" for="openthursday"></label> Thursday</span>
					<span id="hoursthursday"><select name="hoursfrom[4]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[4]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedthursday" style="display:none;">CLOSED</span>
					 <!-- Friday -->
					<span class="week"><input type="checkbox" name="daysopen[5]" id="openfriday" checked><label class="chk" for="openfriday"></label> Friday</span>
					<span id="hoursfriday"><select name="hoursfrom[5]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[5]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedfriday" style="display:none;">CLOSED</span>
					 <!-- Saturday -->
					<span class="week"><input type="checkbox" name="daysopen[6]" id="opensaturday" checked><label class="chk" for="opensaturday"></label> Saturday</span>
					<span id="hourssaturday"><select name="hoursfrom[6]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[6]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedsaturday" style="display:none;">CLOSED</span>
					 <!-- Sunday -->
					<span class="week"><input type="checkbox" name="daysopen[7]" id="opensunday" checked><label class="chk" for="opensunday"></label> Sunday</span>
					<span id="hourssunday"><select name="hoursfrom[7]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select>
					to
					<select name="hoursto[7]">
						<option value="0">12:00am</option>
						<option value="24">12:30am</option>
						<option value="1">1:00am</option>
						<option value="25">1:30am</option>
						<option value="2">2:00am</option>
						<option value="26">2:30am</option>
						<option value="3">3:00am</option>
						<option value="27">3:30am</option>
						<option value="4">4:00am</option>
						<option value="28">4:30am</option>
						<option value="5">5:00am</option>
						<option value="29">5:30am</option>
						<option value="6">6:00am</option>
						<option value="30">6:30am</option>
						<option value="7">7:00am</option>
						<option value="31">7:30am</option>
						<option value="8">8:00am</option>
						<option value="32">8:30am</option>
						<option value="9">9:00am</option>
						<option value="33">9:30am</option>
						<option value="10">10:00am</option>
						<option value="34">10:30am</option>
						<option value="11">11:00am</option>
						<option value="35">11:30am</option>
						<option value="12">12:00pm</option>
						<option value="36">12:30pm</option>

						<option value="13">1:00pm</option>
						<option value="37">1:30pm</option>
						<option value="14">2:00pm</option>
						<option value="38">2:30pm</option>
						<option value="15">3:00pm</option>
						<option value="39">3:30pm</option>
						<option value="16">4:00pm</option>
						<option value="40">4:30pm</option>
						<option value="17">5:00pm</option>
						<option value="41">5:30pm</option>
						<option value="18">6:00pm</option>
						<option value="42">6:30pm</option>
						<option value="19">7:00pm</option>
						<option value="43">7:30pm</option>
						<option value="20">8:00pm</option>
						<option value="44">8:30pm</option>
						<option value="21">9:00pm</option>
						<option value="45">9:30pm</option>
						<option value="22">10:00pm</option>
						<option value="46">10:30pm</option>
						<option value="23">11:00pm</option>
						<option value="47">11:30pm</option>
					</select></span><span id="closedsunday" style="display:none;">CLOSED</span><?php }} ?>