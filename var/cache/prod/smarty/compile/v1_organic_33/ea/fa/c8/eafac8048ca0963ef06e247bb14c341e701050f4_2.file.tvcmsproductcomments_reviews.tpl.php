<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:30
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmsproductcomments\views\templates\front\tvcmsproductcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b3068697bca4_12112013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafac8048ca0963ef06e247bb14c341e701050f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmsproductcomments\\views\\templates\\front\\tvcmsproductcomments_reviews.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b3068697bca4_12112013 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productType']->value)) && $_smarty_tpl->tpl_vars['productType']->value == 'grid') {?><div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><div class="tvall-product-star-icon" itemprop="reviewCount" content='<?php if ($_smarty_tpl->tpl_vars['total_comments']->value > 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['total_comments']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>'><div class="star_content" itemprop="ratingValue" content='<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value > 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['averageTotal']->value, ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>'><?php $_smarty_tpl->_assignInScope('count_review', 0);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?><div class="star"><i class='material-icons'>&#xe838;</i> </div><?php } else { ?><div class="star star_on"><i class='material-icons'>&#xe838;</i> </div><?php $_smarty_tpl->_assignInScope('count_review', $_smarty_tpl->tpl_vars['count_review']->value+1);
}
}
}
?></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?><div class='tvall-product-review'><?php if ($_smarty_tpl->tpl_vars['total_comments']->value == 0 || $_smarty_tpl->tpl_vars['total_comments']->value < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
}?></div><?php }?></div></div><?php } else { ?><div class="tvall-product-star-icon"><div class="star_content"><?php $_smarty_tpl->_assignInScope('count_review', 0);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?><div class="star"><i class='material-icons'>&#xe838;</i> </div><?php } else { ?><div class="star star_on"><i class='material-icons'>&#xe838;</i> </div><?php $_smarty_tpl->_assignInScope('count_review', $_smarty_tpl->tpl_vars['count_review']->value+1);
}
}
}
?></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?><div class='tvall-product-review'><?php if ($_smarty_tpl->tpl_vars['total_comments']->value == 0 || $_smarty_tpl->tpl_vars['total_comments']->value < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('(%s)',$_smarty_tpl->tpl_vars['total_comments']->value),'mod'=>'tvcmsproductcomments'),$_smarty_tpl ) );
}?></div><?php }?></div><?php }
}
}
