<?php /* Smarty version 2.6.26, created on 2013-11-16 21:24:38
         compiled from Login/templates/message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'Login/templates/message.tpl', 7, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['infoMessage'] )): ?>
    <p class="message"><?php echo $this->_tpl_vars['infoMessage']; ?>
</p>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['formErrors'] )): ?>
    <p id="login_error">
        <?php $_from = $this->_tpl_vars['formErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['data']):
?>
            <strong><?php echo ((is_array($_tmp='General_Error')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</strong>
            : <?php echo $this->_tpl_vars['data']; ?>

            <br/>
        <?php endforeach; endif; unset($_from); ?>
    </p>
<?php endif; ?>
