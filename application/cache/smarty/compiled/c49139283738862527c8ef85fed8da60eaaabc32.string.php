<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 14:44:36
         compiled from "c49139283738862527c8ef85fed8da60eaaabc32" */ ?>
<?php /*%%SmartyHeaderCode:1550251471a44161b07-07752402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49139283738862527c8ef85fed8da60eaaabc32' => 
    array (
      0 => 'c49139283738862527c8ef85fed8da60eaaabc32',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1550251471a44161b07-07752402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51471a441a8af7_73369832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51471a441a8af7_73369832')) {function content_51471a441a8af7_73369832($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>

	<section>
		<header>
			<h1>d<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 by <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
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
<?php }} ?>