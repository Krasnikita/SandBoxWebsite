<?php /* Smarty version Smarty-3.1.19, created on 2018-11-05 21:21:00
         compiled from "/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19334223415be0981c803fa9-48050251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77463a6b72eb580f2a8bcf417ebc81c869e711b3' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/admin829u0hsj6/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1540409560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19334223415be0981c803fa9-48050251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5be0981c804cf1_35135272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be0981c804cf1_35135272')) {function content_5be0981c804cf1_35135272($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
