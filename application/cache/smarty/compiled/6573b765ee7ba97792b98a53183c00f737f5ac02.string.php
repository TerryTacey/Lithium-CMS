<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 00:22:46
         compiled from "6573b765ee7ba97792b98a53183c00f737f5ac02" */ ?>
<?php /*%%SmartyHeaderCode:45015148f346aa5603-46681255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6573b765ee7ba97792b98a53183c00f737f5ac02' => 
    array (
      0 => '6573b765ee7ba97792b98a53183c00f737f5ac02',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '45015148f346aa5603-46681255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148f346ad1174_01666868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148f346ad1174_01666868')) {function content_5148f346ad1174_01666868($_smarty_tpl) {?>
	<section>
		<form action="login" method="post">
			<label>Username</label>
				<input name="username" type="text">
			<label>Password</label>
				<input name="password" type="password">
			<input name="login" type="submit" value="Login">
		</form>
	</section>
	<?php }} ?>