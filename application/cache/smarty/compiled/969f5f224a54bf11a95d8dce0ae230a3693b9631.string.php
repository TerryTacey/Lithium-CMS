<?php /* Smarty version Smarty-3.1.13, created on 2013-03-18 14:59:00
         compiled from "969f5f224a54bf11a95d8dce0ae230a3693b9631" */ ?>
<?php /*%%SmartyHeaderCode:2106351471da494d8d1-24624364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969f5f224a54bf11a95d8dce0ae230a3693b9631' => 
    array (
      0 => '969f5f224a54bf11a95d8dce0ae230a3693b9631',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2106351471da494d8d1-24624364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51471da4990059_66708853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51471da4990059_66708853')) {function content_51471da4990059_66708853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>
	<section>
		<header>
			<h1><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
 by <?php echo $_smarty_tpl->tpl_vars['page']->value['author'];?>
</h1>
		</h1>

		<article>
			<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

		</article>

		<footer>
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['date_posted'],"%b %e, %Y at %l:%M %p");?>

		</footer>
	</section>
<?php }} ?>