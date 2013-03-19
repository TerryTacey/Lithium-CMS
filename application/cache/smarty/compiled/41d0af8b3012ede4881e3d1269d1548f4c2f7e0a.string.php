<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 20:10:38
         compiled from "41d0af8b3012ede4881e3d1269d1548f4c2f7e0a" */ ?>
<?php /*%%SmartyHeaderCode:272945148b82e04b9a9-36196740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d0af8b3012ede4881e3d1269d1548f4c2f7e0a' => 
    array (
      0 => '41d0af8b3012ede4881e3d1269d1548f4c2f7e0a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '272945148b82e04b9a9-36196740',
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
  'unifunc' => 'content_5148b82e09b280_99393056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5148b82e09b280_99393056')) {function content_5148b82e09b280_99393056($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lithium\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	<section>
		<header>
			<h1><a href="
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: article</p>
<p>Filename: views/blog.php</p>
<p>Line Number: 5</p>


	<p>Backtrace: </p>
	
		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\third_party\Smarty\Smarty.class.php<br />
			Line: 1428<br />
			Function: call_user_func			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\themes\test_theme\views\blog.php<br />
			Line: 5<br />
			Function: mutingErrorHandler			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\third_party\MX\Loader.php<br />
			Line: 321<br />
			Function: include			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\libraries\Template.php<br />
			Line: 728<br />
			Function: file			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\libraries\Template.php<br />
			Line: 707<br />
			Function: _load_view			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\libraries\Template.php<br />
			Line: 224<br />
			Function: _find_view			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\modules\blog\controllers\blog.php<br />
			Line: 55<br />
			Function: build			</p>

		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\application\modules\welcome\controllers\welcome.php<br />
			Line: 18<br />
			Function: index			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: C:\xampp\htdocs\lithium\index.php<br />
			Line: 274<br />
			Function: require_once			</p>

		
	</p>


</div>http://localhost/lithium/blog"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
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