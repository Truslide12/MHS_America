<?php /* Smarty version 2.6.26, created on 2013-12-09 04:00:25
         compiled from Goals/templates/single_goal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'Goals/templates/single_goal.tpl', 6, false),array('modifier', 'money', 'Goals/templates/single_goal.tpl', 18, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="plugins/Goals/templates/goals.css"/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "Goals/templates/title_and_evolution_graph.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear"></div>
<?php if ($this->_tpl_vars['nb_conversions'] > 0): ?>
    <h2><?php echo ((is_array($_tmp='Goals_ConversionsOverview')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</h2>
    <ul class="ulGoalTopElements">
        <?php if (! isset ( $this->_tpl_vars['ecommerce'] )): ?>
            <?php if (isset ( $this->_tpl_vars['topDimensions']['country'] )): ?>
                <li><?php echo ((is_array($_tmp='Goals_BestCountries')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Goals/templates/list_top_dimension.tpl', 'smarty_include_vars' => array('topDimension' => $this->_tpl_vars['topDimensions']['country'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li><?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['topDimensions']['keyword'] ) && count ( $this->_tpl_vars['topDimensions']['keyword'] ) > 0): ?>
                <li><?php echo ((is_array($_tmp='Goals_BestKeywords')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Goals/templates/list_top_dimension.tpl', 'smarty_include_vars' => array('topDimension' => $this->_tpl_vars['topDimensions']['keyword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li><?php endif; ?>
            <?php if (isset ( $this->_tpl_vars['topDimensions']['website'] ) && count ( $this->_tpl_vars['topDimensions']['website'] ) > 0): ?>
                <li><?php echo ((is_array($_tmp='Goals_BestReferers')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Goals/templates/list_top_dimension.tpl', 'smarty_include_vars' => array('topDimension' => $this->_tpl_vars['topDimensions']['website'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li><?php endif; ?>
            <li><?php echo ((is_array($_tmp='Goals_ReturningVisitorsConversionRateIs')) ? $this->_run_mod_handler('translate', true, $_tmp, "<b>".($this->_tpl_vars['conversion_rate_returning'])."</b>") : smarty_modifier_translate($_tmp, "<b>".($this->_tpl_vars['conversion_rate_returning'])."</b>")); ?>

                , <?php echo ((is_array($_tmp='Goals_NewVisitorsConversionRateIs')) ? $this->_run_mod_handler('translate', true, $_tmp, "<b>".($this->_tpl_vars['conversion_rate_new'])."</b>") : smarty_modifier_translate($_tmp, "<b>".($this->_tpl_vars['conversion_rate_new'])."</b>")); ?>
</li>
        <?php else: ?>
            <li><?php echo ((is_array($_tmp='Live_GoalRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['revenue'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php if (! empty ( $this->_tpl_vars['revenue_subtotal'] )): ?>,
                    <?php echo ((is_array($_tmp='General_Subtotal')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['revenue_subtotal'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php endif; ?><?php if (! empty ( $this->_tpl_vars['revenue_tax'] )): ?>,
                    <?php echo ((is_array($_tmp='General_Tax')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['revenue_tax'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php endif; ?><?php if (! empty ( $this->_tpl_vars['revenue_shipping'] )): ?>,
                    <?php echo ((is_array($_tmp='General_Shipping')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['revenue_shipping'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php endif; ?><?php if (! empty ( $this->_tpl_vars['revenue_discount'] )): ?>,
                    <?php echo ((is_array($_tmp='General_Discount')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['revenue_discount'])) ? $this->_run_mod_handler('money', true, $_tmp, $this->_tpl_vars['idSite']) : smarty_modifier_money($_tmp, $this->_tpl_vars['idSite'])); ?>
<?php endif; ?>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
    $(document).ready(function () {
        $(\'.goalTopElement\').tooltip({
            track:   true,
            content: function () {
                return $(this).attr("title");
            },
            show: false,
            hide: false
        });
    });
</script>
'; ?>


<?php if ($this->_tpl_vars['displayFullReport']): ?>
    <?php if ($this->_tpl_vars['nb_conversions'] > 0 || ! empty ( $this->_tpl_vars['cart_nb_conversions'] )): ?>
        <h2 id='titleGoalsByDimension'>
            <?php if (isset ( $this->_tpl_vars['idGoal'] )): ?>
                <?php echo ((is_array($_tmp='Goals_GoalConversionsBy')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['goalName']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['goalName'])); ?>

            <?php else: ?>
                <?php echo ((is_array($_tmp='Goals_ConversionsOverviewBy')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

            <?php endif; ?>
        </h2>
        <?php echo $this->_tpl_vars['goalReportsByDimension']; ?>

    <?php endif; ?>
<?php endif; ?>