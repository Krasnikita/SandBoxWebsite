<?php /* Smarty version Smarty-3.1.19, created on 2018-11-05 21:23:27
         compiled from "/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6608130745be098afada3f6-89966281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e0761b92d3a1103f79a618d2e4ea8980465181' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1540409560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6608130745be098afada3f6-89966281',
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
  'unifunc' => 'content_5be098afadd843_82781527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be098afadd843_82781527')) {function content_5be098afadd843_82781527($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
