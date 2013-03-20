<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 00:40:25
         compiled from "fe547ab12a112babcd78bc15b049cc5ad678d575" */ ?>
<?php /*%%SmartyHeaderCode:128175148f769623507-65998408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe547ab12a112babcd78bc15b049cc5ad678d575' => 
    array (
      0 => 'fe547ab12a112babcd78bc15b049cc5ad678d575',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '128175148f769623507-65998408',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148f76964df21_66634480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148f76964df21_66634480')) {function content_5148f76964df21_66634480($_smarty_tpl) {?>
	<section>
		<p>Unable to access an error message corresponding to your field name.</p>

		<form action="" method="post">
			<label>Username</label>
				<input name="username" type="text">
			<label>Password</label>
				<input name="password" type="password">
			<input name="login" type="submit" value="Login">
		</form>
	</section>
	<?php }} ?>