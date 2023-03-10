<?php /* Smarty version 2.6.26, created on 2013-11-16 21:37:30
         compiled from SEO/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'SEO/templates/index.tpl', 6, false),array('modifier', 'ucfirst', 'SEO/templates/index.tpl', 6, false),array('modifier', 'escape', 'SEO/templates/index.tpl', 7, false),array('modifier', 'urlencode', 'SEO/templates/index.tpl', 26, false),array('modifier', 'replace', 'SEO/templates/index.tpl', 31, false),array('function', 'ajaxLoadingDiv', 'SEO/templates/index.tpl', 13, false),)), $this); ?>
<div id='SeoRanks'>
    <script type="text/javascript" src="plugins/SEO/templates/rank.js"></script>

    <form method="post" style="padding: 8px;">
        <div align="left" class="mediumtext">
            <?php echo ((is_array($_tmp=((is_array($_tmp='Installation_SetupWebSiteURL')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)); ?>

            <input type="text" id="seoUrl" size="15" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['urlToRank'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="textbox"/>
		  <span style="padding-left:2px;"> 
		  <input type="submit" id="rankbutton" value="<?php echo ((is_array($_tmp='SEO_Rank')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
"/>
		  </span>
        </div>

        <?php echo smarty_function_ajaxLoadingDiv(array('id' => 'ajaxLoadingSEO'), $this);?>


        <div id="rankStats" align="left" style='margin-top:10px'>
            <?php if (empty ( $this->_tpl_vars['ranks'] )): ?>
                <?php echo ((is_array($_tmp='General_Error')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

            <?php else: ?>
                <?php ob_start(); ?>
                    <a href='http://<?php echo ((is_array($_tmp=$this->_tpl_vars['urlToRank'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
' target='_blank'><?php echo ((is_array($_tmp=$this->_tpl_vars['urlToRank'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
                <?php $this->_smarty_vars['capture']['cleanUrl'] = ob_get_contents(); ob_end_clean(); ?>
                <?php echo ((is_array($_tmp='SEO_SEORankingsFor')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_smarty_vars['capture']['cleanUrl']) : smarty_modifier_translate($_tmp, $this->_smarty_vars['capture']['cleanUrl'])); ?>

                <table cellspacing='2' style='margin:auto;line-height:1.5em;padding-top:10px'>
                    <?php $_from = $this->_tpl_vars['ranks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rank']):
?>
                        <tr>
<?php ob_start(); ?><?php if (! empty ( $this->_tpl_vars['rank']['logo_link'] )): ?><a class="linkContent" href="?module=Proxy&action=redirect&url=<?php echo ((is_array($_tmp=$this->_tpl_vars['rank']['logo_link'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" target="_blank"
                         <?php if (! empty ( $this->_tpl_vars['rank']['logo_tooltip'] )): ?>title="<?php echo $this->_tpl_vars['rank']['logo_tooltip']; ?>
"<?php endif; ?>><?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('seoLink', ob_get_contents());ob_end_clean(); ?>
                            <?php ob_start(); ?><?php echo $this->_tpl_vars['seoLink']; ?>
Majestic</a><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('majesticLink', ob_get_contents());ob_end_clean(); ?>
                            <td><?php if (! empty ( $this->_tpl_vars['rank']['logo_link'] )): ?><?php echo $this->_tpl_vars['seoLink']; ?>
<?php endif; ?><img
                                            style='vertical-align:middle;margin-right:6px;' src='<?php echo $this->_tpl_vars['rank']['logo']; ?>
' border='0'
                                            alt="<?php echo $this->_tpl_vars['rank']['label']; ?>
"><?php if (! empty ( $this->_tpl_vars['rank']['logo_link'] )): ?></a><?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['rank']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Majestic', $this->_tpl_vars['majesticLink']) : smarty_modifier_replace($_tmp, 'Majestic', $this->_tpl_vars['majesticLink'])); ?>

                            </td>
                            <td>
                                <div style='margin-left:15px'>
                                <?php if (! empty ( $this->_tpl_vars['rank']['logo_link'] )): ?><?php echo $this->_tpl_vars['seoLink']; ?>
<?php endif; ?>
                                    <?php if (isset ( $this->_tpl_vars['rank']['rank'] )): ?><?php echo $this->_tpl_vars['rank']['rank']; ?>
<?php else: ?>-<?php endif; ?>
                                    <?php if ($this->_tpl_vars['rank']['id'] == 'pagerank'): ?> /10
                                    <?php elseif ($this->_tpl_vars['rank']['id'] == 'google-index' || $this->_tpl_vars['rank']['id'] == 'bing-index'): ?> <?php echo ((is_array($_tmp='SEO_Pages')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

                                    <?php endif; ?>
                                <?php if (! empty ( $this->_tpl_vars['rank']['logo_link'] )): ?></a><?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>

                </table>
            <?php endif; ?>
        </div>
    </form>
</div>