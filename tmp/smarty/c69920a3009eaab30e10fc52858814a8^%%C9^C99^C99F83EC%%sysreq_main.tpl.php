<?php /* Smarty version 2.6.28, created on 2017-06-20 06:42:40
         compiled from sysreq_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'sysreq_main.tpl', 1, false),array('modifier', 'cat', 'sysreq_main.tpl', 12, false),array('modifier', 'oxupper', 'sysreq_main.tpl', 12, false),array('modifier', 'count', 'sysreq_main.tpl', 52, false),array('modifier', 'escape', 'sysreq_main.tpl', 66, false),array('function', 'oxmultilang', 'sysreq_main.tpl', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<ul class="req">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_REQ'), $this);?>
:</h3>
    <?php $_from = $this->_tpl_vars['aInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sGroupName'] => $this->_tpl_vars['aModules']):
?>
    <li class='group'><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='SYSREQ_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sGroupName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sGroupName'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?>

        <?php $_from = $this->_tpl_vars['aModules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sModule'] => $this->_tpl_vars['iModuleState']):
?>
            <ul>
                <?php $this->assign('class', $this->_tpl_vars['oView']->getModuleClass($this->_tpl_vars['iModuleState'])); ?>
                <?php if ($this->_tpl_vars['sModule'] == 'memory_limit'): ?>
                        <li id="<?php echo $this->_tpl_vars['sModule']; ?>
" class="<?php echo $this->_tpl_vars['class']; ?>
"><a href=<?php echo $this->_tpl_vars['oView']->getReqInfoUrl($this->_tpl_vars['sModule']); ?>
 target="_blank"><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MEMORY_LIMIT'), $this);?>
</a></li>
                <?php else: ?>
                    <li id="<?php echo $this->_tpl_vars['sModule']; ?>
" class="<?php echo $this->_tpl_vars['class']; ?>
"><a href=<?php echo $this->_tpl_vars['oView']->getReqInfoUrl($this->_tpl_vars['sModule']); ?>
 target="_blank"><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='SYSREQ_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sModule']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sModule'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?>
</a></li>
                <?php endif; ?>
            </ul>
        <?php endforeach; endif; unset($_from); ?>
    </li>
    <?php endforeach; endif; unset($_from); ?>
    <li class="clear"></li>
</ul>

<?php if ($this->_tpl_vars['aCollations']): ?>
    <ul class="req">
        <h3><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_COLL'), $this);?>
:</h3>
        <?php $_from = $this->_tpl_vars['aCollations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTable'] => $this->_tpl_vars['aColumns']):
?>
        <li class="coll"><?php echo $this->_tpl_vars['sTable']; ?>

            <?php $_from = $this->_tpl_vars['aColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sColumn'] => $this->_tpl_vars['sCollation']):
?>
                <ul>
                    <li id="<?php echo $this->_tpl_vars['sColumn']; ?>
" class="fail"><?php echo $this->_tpl_vars['sColumn']; ?>
 - <?php echo $this->_tpl_vars['sCollation']; ?>
</li>
                </ul>
            <?php endforeach; endif; unset($_from); ?>
        </li>
        <?php endforeach; endif; unset($_from); ?>
        <li class="clear"></li>
    </ul>
<?php endif; ?>

<ul class="req">
    <li class="pass"> - <?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_PASS'), $this);?>
</li>
    <li class="pmin"> - <?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_PMIN'), $this);?>
</li>
    <li class="fail"> - <?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_FAIL'), $this);?>
</li>
    <li class="null"> - <?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_DESCRIPTION_NULL'), $this);?>
</li>
</ul>

<?php $this->assign('_tplBlockErr', $this->_tpl_vars['oView']->getMissingTemplateBlocks()); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['_tplBlockErr'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
    <ul class="req">
        <h3><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MODULE_BLOCKS_REQ'), $this);?>
:</h3>
        <table class="moduleBlockErrorsTable">
            <thead>
                <tr>
                    <td><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MODULE_BLOCKS_MODNAME'), $this);?>
</td>
                    <td><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MODULE_BLOCKS_BLOCKNAME'), $this);?>
</td>
                    <td><?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MODULE_BLOCKS_TPLFILE'), $this);?>
</td>
                </tr>
            </thead>
            <tbody>
                <?php $_from = $this->_tpl_vars['_tplBlockErr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_err']):
?>
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['_err']['module'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['_err']['block'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['_err']['template'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            </tbody>
        </table>
    </ul>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>