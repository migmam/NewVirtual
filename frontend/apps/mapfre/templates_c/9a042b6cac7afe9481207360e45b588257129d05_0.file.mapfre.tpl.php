<?php /* Smarty version 3.1.27, created on 2015-10-13 13:58:05
         compiled from "/var/www/html/advanced/frontend/views/layouts/mapfre.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:690910913561d0deda255a6_96303130%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a042b6cac7afe9481207360e45b588257129d05' => 
    array (
      0 => '/var/www/html/advanced/frontend/views/layouts/mapfre.tpl',
      1 => 1444744530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690910913561d0deda255a6_96303130',
  'variables' => 
  array (
    'name' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561d0deda39485_39086753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561d0deda39485_39086753')) {
function content_561d0deda39485_39086753 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/html/advanced/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_html_image')) require_once '/var/www/html/advanced/vendor/smarty/smarty/libs/plugins/function.html_image.php';

$_smarty_tpl->properties['nocache_hash'] = '690910913561d0deda255a6_96303130';
?>

Template for mapfre project



User Information:<p>

Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
<br>
Address: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>

<?php echo smarty_function_html_image(array('file'=>"http://localhost:8080/common/images/vc.png"),$_smarty_tpl);

}
}
?>