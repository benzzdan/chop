<?php /* Smarty version 2.6.28, created on 2017-06-20 06:42:39
         compiled from sysreq_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'sysreq_list.tpl', 1, false),array('modifier', 'oxaddslashes', 'sysreq_list.tpl', 5, false),array('function', 'oxmultilang', 'sysreq_list.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
    if (parent.parent)
    {   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
        parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_LIST_MENUITEM'), $this);?>
";
        parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_LIST_MENUSUBITEM'), $this);?>
";
        parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
        parent.parent.setTitle();
    }
</script>

<script type="text/javascript">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
}
//-->
</script>

<div id="liste">

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagetabsnippet.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</body>
</html>