<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 19:12:08
         compiled from "6a60fadfcd56285829f95141fedc65f175f40d7f" */ ?>
<?php /*%%SmartyHeaderCode:8246514758f8d84a15-85405581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a60fadfcd56285829f95141fedc65f175f40d7f' => 
    array (
      0 => '6a60fadfcd56285829f95141fedc65f175f40d7f',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '8246514758f8d84a15-85405581',
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
  'unifunc' => 'content_514758f8ddae00_95524859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514758f8ddae00_95524859')) {function content_514758f8ddae00_95524859($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\function.link.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	<section>
		<header>
			<h1><a href="<?php echo smarty_function_link(array('url'=>'blog'/$_smarty_tpl->tpl_vars['article']->value['slug']),$_smarty_tpl);?>
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