<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 00:32:31
         compiled from "89ff1a4ee032ddbbb234fef8049c275d69fea7c3" */ ?>
<?php /*%%SmartyHeaderCode:5685148f58f3de750-85025650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ff1a4ee032ddbbb234fef8049c275d69fea7c3' => 
    array (
      0 => '89ff1a4ee032ddbbb234fef8049c275d69fea7c3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '5685148f58f3de750-85025650',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148f58f40a763_31063530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148f58f40a763_31063530')) {function content_5148f58f40a763_31063530($_smarty_tpl) {?>
	<section>
		<p>The Username field is required.</p>

		<form action="" method="post">
			<label>Username</label>
				<input name="username" type="text">
			<label>Password</label>
				<input name="password" type="password">
			<input name="login" type="submit" value="Login">
		</form>
	</section>
	<?php }} ?>