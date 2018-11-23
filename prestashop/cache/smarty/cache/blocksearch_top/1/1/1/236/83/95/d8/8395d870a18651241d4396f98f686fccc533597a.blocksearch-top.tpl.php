<?php /*%%SmartyHeaderCode:15126181145be09914754182-91874799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8395d870a18651241d4396f98f686fccc533597a' => 
    array (
      0 => '/home/u919079012/domains/sandboxwebsite.ml/public_html/prestashop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1540409571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15126181145be09914754182-91874799',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5be099196799a5_02296016',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be099196799a5_02296016')) {function content_5be099196799a5_02296016($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//u919079012.hostingerapp.com/prestashop/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
