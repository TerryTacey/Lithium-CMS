<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 14:42:52
         compiled from "39cca8d2911ab0877e9ab9f794d8ba82e2171cd5" */ ?>
<?php /*%%SmartyHeaderCode:3667514719dc613df2-65655262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39cca8d2911ab0877e9ab9f794d8ba82e2171cd5' => 
    array (
      0 => '39cca8d2911ab0877e9ab9f794d8ba82e2171cd5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3667514719dc613df2-65655262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514719dc629e85_24604078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514719dc629e85_24604078')) {function content_514719dc629e85_24604078($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>

	<section>
		<header>
			<h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
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