<?php /* Smarty version 2.6.26, created on 2013-11-08 02:45:49
         compiled from VisitorGenerator/templates/generate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'VisitorGenerator/templates/generate.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo ((is_array($_tmp='VisitorGenerator_VisitorGenerator')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>

Generated visits for <?php echo $this->_tpl_vars['siteName']; ?>
 and for <?php echo ((is_array($_tmp='General_LastDays')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['days']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['days'])); ?>
.<br/>
Generated <?php echo ((is_array($_tmp='General_NbActions')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['nbActionsTotal']; ?>
<br/>
<?php echo ((is_array($_tmp='VisitorGenerator_NbRequestsPerSec')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['nbRequestsPerSec']; ?>
<br/>
<?php echo $this->_tpl_vars['timer']; ?>
</p>
<p><strong>
        <?php if ($this->_tpl_vars['browserArchivingEnabled']): ?>
            The reports will be reprocessed the next time you visit the Piwik reports, it might take a few minutes.
        <?php else: ?>
            Please re-run the archive.php Piwik script in the crontab to refresh the reports.
            <a href="http://piwik.org/docs/setup-auto-archiving/">See "How to Set up Auto-Archiving of Your Reports"</a>
        <?php endif; ?>
    </strong>
</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>