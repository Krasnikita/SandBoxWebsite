<?php /* Smarty version Smarty-3.1.19, created on 2018-11-05 21:22:16
         compiled from "/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16836990315be09868ceed44-14280187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ad5a2a991ed572aeaeb52a94f3dbecb2cd5675' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1540409560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16836990315be09868ceed44-14280187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5be09868cf2498_24149217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be09868cf2498_24149217')) {function content_5be09868cf2498_24149217($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
