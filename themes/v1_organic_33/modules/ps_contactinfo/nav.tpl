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
<div id="_desktop_contact_link" class="">
    <div id="contact-link">
        <a href="tel:{$contact_infos.phone}">
            {if $contact_infos.phone}
            <i class='material-icons'>&#xe0b0;</i>
            <span class="tvcall-on">
                {l s='Call On' d='Shop.Theme.Actions'}&nbsp;
            </span>
            {* [1][/1] is for a HTML tag. *}
            {l
            s='[1]%phone%[/1]'
            sprintf=[
            '[1]' => '<span class="tvcms_contact_info">',
                '[/1]' => '</span>',
            '%phone%' => $contact_infos.phone
            ]
            d='Shop.Theme.Global'
            }
            {/if}
        </a>
    </div>
</div>
{/strip}