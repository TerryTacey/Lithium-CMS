<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 20:12:06
         compiled from "7195a9809b83f0310cbf4c05edf435169650ca80" */ ?>
<?php /*%%SmartyHeaderCode:147195148b886dcc8d8-67335921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7195a9809b83f0310cbf4c05edf435169650ca80' => 
    array (
      0 => '7195a9809b83f0310cbf4c05edf435169650ca80',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '147195148b886dcc8d8-67335921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5148b886e1dbd4_75209478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148b886e1dbd4_75209478')) {function content_5148b886e1dbd4_75209478($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	<section>
		<header>
			<h1><a href="http://localhost/lithium/blog<?php echo $_smarty_tpl->tpl_vars['article']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a> by <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</h1>
		</header>

		<article>
			<p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
		</article>

		<footer>
			<p><small>Posted <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['date_posted'],"%b %e, %Y at %l:%M %p");?>
 in <?php echo $_smarty_tpl->tpl_vars['article']->value['category'];?>
</small></p>
		</footer>
	</section>
<?php } ?><?php }} ?>