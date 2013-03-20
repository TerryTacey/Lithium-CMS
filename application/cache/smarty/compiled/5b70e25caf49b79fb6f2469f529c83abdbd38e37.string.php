<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 00:32:27
         compiled from "5b70e25caf49b79fb6f2469f529c83abdbd38e37" */ ?>
<?php /*%%SmartyHeaderCode:283155148f58b9794c3-62182799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b70e25caf49b79fb6f2469f529c83abdbd38e37' => 
    array (
      0 => '5b70e25caf49b79fb6f2469f529c83abdbd38e37',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '283155148f58b9794c3-62182799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148f58b9a4db6_93307975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148f58b9a4db6_93307975')) {function content_5148f58b9a4db6_93307975($_smarty_tpl) {?>
	<section>
		<p>The Password field is required.</p>

		<form action="" method="post">
			<label>Username</label>
				<input name="username" type="text">
			<label>Password</label>
				<input name="password" type="password">
			<input name="login" type="submit" value="Login">
		</form>
	</section>
	<?php }} ?>