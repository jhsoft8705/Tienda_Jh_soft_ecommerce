<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmscustomsetting\views\templates\front\display_custom_social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b306847f1435_03810845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a7a89522892a7d80d63f76f2dbc16210137de0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmscustomsetting\\views\\templates\\front\\display_custom_social.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b306847f1435_03810845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['LeftStickyStatus']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169459620565b306847d4b59_65718447', 'block_social');
}
if ($_smarty_tpl->tpl_vars['RightStickyStatus']->value) {?><div class="tvcmsright-sticky wow slideInRight"><div class="tvright-sticky"><div class="tvright-sticky-wrapper"><div class="cart-preview"><div class="tvright-sticky-add-to-cart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?action=show"><i class="material-icons">&#xE8CC;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div></div><div class="tvright-sticky-account"><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="material-icons">&#xe7fd;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php if ($_smarty_tpl->tpl_vars['WishListEnabledStatus']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlocksticky'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['CompareEnabledStatus']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductComparesticky'),$_smarty_tpl ) );
}?><div class="tvsticky-up-arrow"><a href="javascript:" class="tvcmsup-arrow"><i class='material-icons'>&#xe316;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Scroll Top','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div></div></div></div><?php }
}
/* {block 'block_social'} */
class Block_169459620565b306847d4b59_65718447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_169459620565b306847d4b59_65718447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-social tv-footer-social-icon wow slideInLeft"><div class="tv-footer-social-icon-wrapper"><div class="tv-footer-social-icon-inner"><?php if (!empty(Configuration::get('BLOCKSOCIAL_FACEBOOK',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvfacebook-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_FACEBOOK',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvfacebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_TWITTER',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvtwitter-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_TWITTER',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvtwitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_RSS',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvrss-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_RSS',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvrss" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rss" class="svg-inline--fa fa-rss fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M128.081 415.959c0 35.369-28.672 64.041-64.041 64.041S0 451.328 0 415.959s28.672-64.041 64.041-64.041 64.04 28.673 64.04 64.041zm175.66 47.25c-8.354-154.6-132.185-278.587-286.95-286.95C7.656 175.765 0 183.105 0 192.253v48.069c0 8.415 6.49 15.472 14.887 16.018 111.832 7.284 201.473 96.702 208.772 208.772.547 8.397 7.604 14.887 16.018 14.887h48.069c9.149.001 16.489-7.655 15.995-16.79zm144.249.288C439.596 229.677 251.465 40.445 16.503 32.01 7.473 31.686 0 38.981 0 48.016v48.068c0 8.625 6.835 15.645 15.453 15.999 191.179 7.839 344.627 161.316 352.465 352.465.353 8.618 7.373 15.453 15.999 15.453h48.068c9.034-.001 16.329-7.474 16.005-16.504z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_YOUTUBE',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvyoutube-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_YOUTUBE',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvyoutube" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_PINTEREST',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvpinterest-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_PINTEREST',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pintrest','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvpinterest" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" class="svg-inline--fa fa-pinterest-p fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pintrest','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_VIMEO',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvvimeo-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_VIMEO',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvvimeo" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vimeo-v" class="svg-inline--fa fa-vimeo-v fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_INSTAGRAM',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><div class="tvblock-social-content tvinstagram-wrapper"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_INSTAGRAM',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
"><svg class="tvblock-social-icon tvinstagram" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</span></a></div><?php }?></div></div></div><?php
}
}
/* {/block 'block_social'} */
}
