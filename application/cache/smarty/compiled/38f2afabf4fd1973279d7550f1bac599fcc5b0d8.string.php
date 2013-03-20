<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 22:55:29
         compiled from "38f2afabf4fd1973279d7550f1bac599fcc5b0d8" */ ?>
<?php /*%%SmartyHeaderCode:71055148ded1b9b8f2-53472206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38f2afabf4fd1973279d7550f1bac599fcc5b0d8' => 
    array (
      0 => '38f2afabf4fd1973279d7550f1bac599fcc5b0d8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '71055148ded1b9b8f2-53472206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148ded1bd0097_59725664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148ded1bd0097_59725664')) {function content_5148ded1bd0097_59725664($_smarty_tpl) {?>
	<section>
		<form action="admin/login" method="post">
			<label>Username</label>
				<input name="username" type="text">
			<label>Password</label>
				<input name="password" type="password">
			<input name="login" type="submit" value="Login">
		</form>
	</section>
	<?php }} ?>