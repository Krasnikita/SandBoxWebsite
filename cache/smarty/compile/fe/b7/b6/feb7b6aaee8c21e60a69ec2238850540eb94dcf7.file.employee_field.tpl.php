<?php /* Smarty version Smarty-3.1.19, created on 2018-11-05 21:23:58
         compiled from "/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17896719255be098ce6e3a53-36358695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb7b6aaee8c21e60a69ec2238850540eb94dcf7' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1540409559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17896719255be098ce6e3a53-36358695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5be098ce6e4e70_72692983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be098ce6e4e70_72692983')) {function content_5be098ce6e4e70_72692983($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
