<?php /* Smarty version Smarty-3.1.19, created on 2018-11-05 21:22:16
         compiled from "/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10239364675be09868cf4eb9-44472429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128cd18ef8812a0dd0f1ce4f09cde9a3e0e50e66' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1540409560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10239364675be09868cf4eb9-44472429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5be09868cfb526_94303130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be09868cfb526_94303130')) {function content_5be09868cfb526_94303130($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
