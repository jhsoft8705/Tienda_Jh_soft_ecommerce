{**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2022 PrestaShop SA
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class="tvproduct-wrapper list">
        {block name='product_thumbnail'}
        <div class="tvproduct-image col-sm-4">
            {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img src="{$product.cover.bySize[$image_size]['url']}" alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name}{/if}" class="tvproduct-defult-img tv-img-responsive" height="{$product.cover.bySize[$image_size]['height']}" width="{$product.cover.bySize[$image_size]['width']}" loading="lazy" />
                {if Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')}
                {if isset($product.images.0.bySize[$image_size]['url']) && empty($product.images.0.cover)}
                <img class="tvproduct-hover-img tv-img-responsive" src="{$product.images.0.bySize[$image_size]['url']}" alt="{$product.name}" height="{$product.images.0.bySize[$image_size]['height']}" width="{$product.images.0.bySize[$image_size]['width']}" loading="lazy" />
                {elseif isset($product.images.1.bySize[$image_size]['url']) && empty($product.images.1.cover)}
                {if {Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG') != '0'}}
                <img class="tvproduct-hover-img tv-img-responsive" src="{$product.images.1.bySize[$image_size]['url']}" alt="{$product.name}" height="{$product.images.0.bySize[$image_size]['height']}" width="{$product.images.0.bySize[$image_size]['width']}" loading="lazy" />
                {/if}
                {/if}
                {/if}
            </a>
            {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
                <img src="{$urls.no_picture_image.bySize[$image_size]['url']}" class="tv-img-responsive" loading="lazy" />
            </a>
            {/if}
            {block name='product_flags'}
            <ul class="tvproduct-flags tvproduct-online-new-wrapper">
                {foreach from=$product.flags item=flag}
                {if $flag.type == 'online-only' || $flag.type == 'new'}
                <li class="product-flag {$flag.type}">{$flag.label}</li>
                {/if}
                {/foreach}
            </ul>
            <ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
                {foreach from=$product.flags item=flag}
                {if $flag.type == 'on-sale' || $flag.type == 'pack'}
                <li class="product-flag {$flag.type}">{$flag.label}</li>
                {/if}
                {/foreach}
            </ul>
            {/block}
        </div>
        {/block}
        <div class="tvproductdescription-button-wrapper col-sm-8">
            <div class="product-description">
                {block name='product_name'}
                <div class="tvproduct-name product-title">
                    <a href="{$product.url}">
                        <h6>{$product.name}</h6>
                    </a>
                </div>
                {* <div class="tvproduct-cat-name">{$product.category_name}</div> *}
                {if $product.description_short }
                <div class='tv-product-desc'>
                    {$product.description_short|truncate:400|strip_tags:true}
                </div>
                {/if}
                {/block}
                {* Start Product Comment *}
                {hook h='displayReviewProductList' product=$product}
                {* End Product Comment *}
                {block name='product_price_and_shipping'}
                <div class="tv-product-price">
                    <div class="tvproduct-name-price-wrapper">
                        {if $product.show_price}
                        <div class="product-price-and-shipping">
                            <span class="price">{$product.price}</span>
                            {if $product.has_discount}
                            <span class="regular-price">{$product.regular_price}</span>
                            {/if}
                            {if $product.has_discount}
                            {hook h='displayProductPriceBlock' product=$product type="old_price"}
                            <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                            {if $product.discount_type === 'percentage'}
                            <span class="discount-percentage discount-product tvproduct-discount-price">{$product.discount_percentage}{l s=' off' d='Shop.Theme.Catalog'}</span>
                            {elseif $product.discount_type === 'amount'}
                            <span class="discount-amount discount-product tvproduct-discount-price">{$product.discount_amount_to_display} {l s=' off' d='Shop.Theme.Catalog'}</span>
                            {/if}
                            {/if}
                            {hook h='displayProductPriceBlock' product=$product type="before_price"}
                            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                        </div>
                        {/if}
                    </div>
                </div>
                {/block}
                <div class="Product-Comment-Stock clearfix">
                    {* Start Product Stock Indicator *}
                    {hook h='displayProductListStockIndicator' product=$product}
                    {* End Product Stock Indicator *}
                </div>
                {if Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_COLOR') == '1'}
                {block name='product_variants'}
                {if $product.main_variants}
                <div class="tvproduct-color">
                    {foreach from=$product.main_variants item=color_info}
                    <div class='tvproduct-color-wrapper'>
                        <a href="{$color_info.url}">
                            <div class="tvproduct-color-box-border">
                                <div class='tvporoduct-color-box' style='{if $color_info.html_color_code != ""}background-color: {$color_info.html_color_code};{else}background-image: url({$color_info.texture});{/if}'></div>
                            </div>
                        </a>
                    </div>
                    {/foreach}
                </div>
                {/if}
                {/block}
                {/if}
                {if !empty($product.specific_prices.from) && !empty($product.specific_prices.to) && $product.specific_prices.from != '0000-00-00 00:00:00' && $product.specific_prices.to != '0000-00-00 00:00:00'}
                {include file='catalog/_partials/miniatures/product-timer.tpl' timer=$product.specific_prices.to}
                {/if}
            </div>
            <div class='tvall-product-btn-list'>
                <div class="tvproduct-cart-btn">
                    <form action="{$urls.pages.cart}" method="post">
                        <input type="hidden" name="id_product" value="{$product.id_product}">
                        <input type="hidden" name="qty" value="1">
                        {if !empty($product.is_customizable) && count($product.customizations.fields)}
                        <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                        {/if}
                        <input type="hidden" name="token" value="{$static_token}">
                        <button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart {if !$product.add_to_cart_url}tvproduct-out-of-stock disable{/if}" {if !$product.add_to_cart_url}disabled{/if} data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if}">
                            {* <i class='material-icons add-cart'>&#xe8cc;</i> *}
                            <i class="material-icons add-cart add-cart-loading">&#xe863;</i>
                            <svg class="add-cart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 128.3 134.7" style="enable-background:new 0 0 128.3 134.7;" xml:space="preserve">
                                <g id="XMLID_4_">
                                    <path id="XMLID_1_" style="fill:none;stroke:#FFFFFF;stroke-width:10;stroke-miterlimit:10;" d="M100.2,129.7h-72c-3.8,0-7.1-2.7-7.8-6.4L5.2,50.8c-1-5,2.8-9.6,7.8-9.6h102.3c5.1,0,8.9,4.7,7.8,9.6L108,123.3C107.2,127,103.9,129.7,100.2,129.7z" />
                                    <path id="XMLID_3_" style="fill:#FFFFFF;" d="M52.4,104.7L52.4,104.7c-2.5,0-4.5-2-4.5-4.5V70.6c0-2.5,2-4.5,4.5-4.5h0c2.5,0,4.5,2,4.5,4.5v29.6C56.9,102.7,54.9,104.7,52.4,104.7z" />
                                    <path id="XMLID_5_" style="fill:#FFFFFF;" d="M75.9,104.7L75.9,104.7c-2.5,0-4.5-2-4.5-4.5V70.6c0-2.5,2-4.5,4.5-4.5h0c2.5,0,4.5,2,4.5,4.5v29.6C80.4,102.7,78.4,104.7,75.9,104.7z" />
                                    <path id="XMLID_6_" style="fill:#FFFFFF;" d="M21.5,42.2L21.5,42.2c-2-1.5-2.4-4.3-0.9-6.3L46.5,1.8c1.5-2,4.3-2.4,6.3-0.9l0,0c2,1.5,2.4,4.3,0.9,6.3L27.8,41.3C26.3,43.3,23.5,43.7,21.5,42.2z" />
                                    <path id="XMLID_8_" style="fill:#FFFFFF;" d="M106.5,42.2L106.5,42.2c2-1.5,2.4-4.3,0.9-6.3L81.6,1.8c-1.5-2-4.3-2.4-6.3-0.9l0,0c-2,1.5-2.4,4.3-0.9,6.3l25.8,34.1C101.7,43.3,104.6,43.7,106.5,42.2z" />
                                </g>
                            </svg>
                            {* <i class='material-icons out-of-stock hide'>&#xe611;</i> *}
                            <svg class="out-of-stock hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="14px" height="14px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path d="M512 0Q373 0 255 68.5T68.5 255T0 512t68.5 257T255 955.5t257 68.5t257-68.5T955.5 769t68.5-257t-68.5-257T769 68.5T512 0zM64 512q0-167 110-294l632 632Q679 961 512 961q-73 0-141.5-22.5T247 874t-96.5-97t-64-123.5T64 512zm787 293L219 173q61-52 136-80.5T512 64q73 0 141.5 22.5t123.5 64t96.5 96.5t64 123.5T960 512q0 166-109 293z" fill="#FFFFFF" />
                                {*
                                <rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /> *}
                            </svg>
                            <span class="tvproduct-add-to-cart-label">{if !$product.add_to_cart_url}{l s='No Stock' d='Shop.Theme.Actions'}{else}{l s='Basket' d='Shop.Theme.Actions'}{/if} </span>
                        </button>
                    </form>
                </div>
                {hook h='displayProductCompareProductList' product=$product}
                {hook h='displayWishlistBtnProductList' product=$product}
                <div class="{* highlighted-informations{if !$product.main_variants} no-variants{/if} *} tvproduct-quick-btn">
                    {block name='quick_view'}
                    <a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Quick View' d='Shop.Theme.Actions'}" data-original-title="{l s='Quick View' d='Shop.Theme.Actions'}">
                        <div class="tvproduct-quick-icon">
                            {* <i class="material-icons search">&#xE8B6;</i> *}
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="18px" height="18px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1056 896">
                                <path d="M531 257q-39 0-74.5 15.5t-61 41t-41 61T339 449t15.5 75t41 61.5t61 40.5t74.5 15q53 0 97-25.5t69.5-69.5t25.5-97q0-79-56-135.5T531 257zm0 320q-34 0-64-17.5t-47.5-47T402 448q0-26 10-49.5t27.5-41t41-27.5t49.5-10q53 0 90.5 37.5T658 448t-37 91t-90 38zm509-136q0-1-.5-2.5t-.5-2.5t-.5-1.5l-.5-.5v-1l-1-2q-68-157-206-246.5T530 95q-107 0-206 39T144.5 249.5T18 431v2.5l-1 1.5v3l-1 2q-1 6-1 9q0 2 .5 4t.5 4q0 1 1 3v2l.5 1.5l.5.5v3q69 157 207.5 245.5T528 801q107 0 205.5-38.5T912 648t125-181q1 0 1-1v-1.5l.5-1l.5-.5v-3l1-2q1-6 1-9q0-2-.5-4t-.5-4zM528 737q-142 0-263-74.5T81 449q63-139 185-214.5T530 159q92 0 176.5 32T862 289.5T975 449q-63 139-184 213.5T528 737z" fill="#222222" />
                                {*
                                <rect x="0" y="0" width="1056" height="896" fill="rgba(0, 0, 0, 0)" /> *}
                            </svg>
                        </div>
                        {* <div class="tvproduct-quick-lable">
                            {l s='Quick View' d='Shop.Theme.Actions'}
                        </div> *}
                    </a>
                    {/block}
                </div>
            </div>
        </div>
    </div>
    {/strip}