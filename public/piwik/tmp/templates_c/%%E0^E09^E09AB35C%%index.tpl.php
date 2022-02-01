<?php /* Smarty version 2.6.26, created on 2013-11-08 02:45:12
         compiled from VisitorGenerator/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'VisitorGenerator/templates/index.tpl', 3, false),array('function', 'url', 'VisitorGenerator/templates/index.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo ((is_array($_tmp='VisitorGenerator_VisitorGenerator')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
<p><?php echo ((is_array($_tmp='VisitorGenerator_PluginDescription')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
<p>You can overwrite the log file that is used to generate fake visits (change <?php echo $this->_tpl_vars['accessLogPath']; ?>
). This is a log file of requests to "piwik.php" in the format
    "Apache combined log".</p>
<form method="POST" action="<?php echo smarty_function_url(array('module' => 'VisitorGenerator','action' => 'generate'), $this);?>
">
    <table class="adminTable" style="width: 600px;">
        <tr>
            <td><label for="idSite"><?php echo ((is_array($_tmp='General_ChooseWebsite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label></td>
            <td>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/sites_selection.tpl", 'smarty_include_vars' => array('showAllSitesItem' => false,'showSelectedSite' => true,'switchSiteOnSelect' => false,'inputName' => 'idSite')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <tr>
            <td><label for="daysToCompute"><?php echo ((is_array($_tmp='VisitorGenerator_DaysToCompute')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label></td>
            <td><input type="text" value="1" name="daysToCompute"/></td>
        </tr>
    </table>
    <?php echo ((is_array($_tmp='VisitorGenerator_Warning')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br/>
    <?php echo ((is_array($_tmp='VisitorGenerator_NotReversible')) ? $this->_run_mod_handler('translate', true, $_tmp, '<b>', '</b>') : smarty_modifier_translate($_tmp, '<b>', '</b>')); ?>
<br/><br/>

    <p><strong>This will generate approximately <?php echo $this->_tpl_vars['countActionsPerRun']; ?>
 fake actions on this site for each day</strong>.<br/>
    </p>
    <?php echo ((is_array($_tmp='VisitorGenerator_AreYouSure')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
<br/><br/>
    <input type="checkbox" name="choice" id="choice" value="yes"/> <label for="choice"><?php echo ((is_array($_tmp='VisitorGenerator_ChoiceYes')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</label>
    <br/>
    <input type="hidden" value="<?php echo $this->_tpl_vars['token_auth']; ?>
" name="token_auth"/>
    <input type="hidden" value="<?php echo $this->_tpl_vars['nonce']; ?>
" name="form_nonce"/>
    <br/>

    NOTE: It might take a few minutes to generate visits and actions, please be patient...<br/>
    There is also a faster tool that will import large test data in Piwik, see the <a href='https://github.com/piwik/piwik/tree/master/tests#testing-data'>README</a>.</p>
    <br/>
    <input type="submit" value="<?php echo ((is_array($_tmp='VisitorGenerator_Submit')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
" name="submit" class="submit"/>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreAdminHome/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>