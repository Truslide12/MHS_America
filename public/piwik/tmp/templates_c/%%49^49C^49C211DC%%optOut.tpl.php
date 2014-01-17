<?php /* Smarty version 2.6.26, created on 2013-11-11 02:51:41
         compiled from CoreAdminHome/templates/optOut.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'CoreAdminHome/templates/optOut.tpl', 8, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php if (! $this->_tpl_vars['trackVisits']): ?><?php echo ((is_array($_tmp='CoreAdminHome_OptOutComplete')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

    <br/>
    <?php echo ((is_array($_tmp='CoreAdminHome_OptOutCompleteBis')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<?php else: ?>
    <?php echo ((is_array($_tmp='CoreAdminHome_YouMayOptOut')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

    <br/>
    <?php echo ((is_array($_tmp='CoreAdminHome_YouMayOptOutBis')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

<?php endif; ?>
<br/><br/>

<form method="post" action="?module=CoreAdminHome&amp;action=optOut<?php if ($this->_tpl_vars['language']): ?>&amp;language=<?php echo $this->_tpl_vars['language']; ?>
<?php endif; ?>">
    <input type="hidden" name="nonce" value="<?php echo $this->_tpl_vars['nonce']; ?>
"></input>
    <input type="hidden" name="fuzz" value="<?php echo time(); ?>
"></input>
    <input onclick="this.form.submit()" type="checkbox" id="trackVisits" name="trackVisits" <?php if ($this->_tpl_vars['trackVisits']): ?>checked="checked"<?php endif; ?>></input>
    <label for="trackVisits"><strong>
            <?php if ($this->_tpl_vars['trackVisits']): ?><?php echo ((is_array($_tmp='CoreAdminHome_YouAreOptedIn')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php echo ((is_array($_tmp='CoreAdminHome_ClickHereToOptOut')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

            <?php else: ?><?php echo ((is_array($_tmp='CoreAdminHome_YouAreOptedOut')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php echo ((is_array($_tmp='CoreAdminHome_ClickHereToOptIn')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<?php endif; ?>
        </strong></label>
</form>
</body>
</html>